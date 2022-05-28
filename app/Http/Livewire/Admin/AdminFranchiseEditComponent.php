<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Franchise;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminFranchiseEditComponent extends Component
{
    public $co_name;
    public $slug;
    public $brand_name;
    public $min_investment;
    public $max_investment;
    public $min_area;
    public $max_area;
    public $total_no_outlet;
   
    public $max_outlet;
    public $min_outlet;
    public $location  ;
    public $state ;
   
    public $short_description;
    public $description;

    public $email;
    public $contact;

    public $property_type;
    public $featured;
    public $image = [];
    public $images;
    public $brand_image;
    //public $brand_images;

    public $review_status;
    public $status;
    
    
    public $category_id;
    public $user_id;
    public $sector_id;
    public $brand_id;
    public $service_id;
   
    public $step;
    public $totalSteps = 4;
    public $currentStep = 1;

    
    public $Location = null;
    public $def = null;
    public function updatedLocation($zone){
        $this->def = Location::where('zone', $zone)->get();
    }

    public $Tier = null;
    public $ice = null;
    public function updatedTier($tier){
        $this->ice = Location::where('tier', $tier)->get();
    }

    public $State = null;
    public $abc = null;
    public function updatedState($state){
        $this->abc = Location::where('state', $state)->get();
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
     if($this->currentStep > $this->totalSteps){
        $this->currentStep = $this->totalSteps;
       }}


    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
      if($this->currentStep < 1){
        $this->currentStep = 1;
       }}

    public function generateSlug(){
        $this->slug = Str::slug($this->brand_name,'-');
    }

    public function mount(){
        //$this->co_name="trial";
        //$this->year=1999;
        //$this->total_no_outlet=30;
        $this->contact=9891713657;
        $this->review_status="1";
        $this->status = 1; 
        $this->currentStep = 1;
    }

    use WithFileUploads;
    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'brand_name'=> 'required',
                'property_type'=> 'required',
                'featured'=> 'required',
                'total_no_outlet'=> 'required',
                'min_investment'=> 'required',
                'max_investment'=> 'required',
                'min_area'=> 'required',
                'max_area'=> 'required',
                'min_outlet'=> 'required',
                'max_outlet'=> 'required',
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'Location'=> 'required',
                'State'=> 'required',
                'Tier'=> 'required',
                'images'=> 'required',
               
            ]);
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'image'=> 'required|array|min:1',               
            ]);
        }
    }

    public function add(){
        $this->resetErrorBag();
        if($this->currentStep == 4){
              $this->validate([
                'terms' => 'accepted',
                'description'=> 'required',
                'short_description'=> 'required',
                'brand_image'=> 'required',
                'email'=> 'required|email|unique:brands',
                'contact'=> 'required|digits:10',
            ]);
        }

     $brand_brochure = 'fbrochure_'.$this->brand_image->getClientOriginalName();
     $upload_brochure = $this->brand_image->storeAs('brochures', $brand_brochure);

     if($upload_brochure){
        $values = array(
            "brand_name" => $this->brand_name,
            "slug" => $this->slug,
            "property_type" => $this->property_type,
            "featured" => $this->featured,
            "total_no_outlet" => $this->total_no_outlet,
            "min_investment" => $this->min_investment,
            "max_investment" => $this->max_investment,
            "min_area" => $this->min_area,
            "max_area" => $this->max_area,
            "min_outlet" => $this->min_outlet,
            "max_outlet" => $this->max_outlet,
            "brand_image" => $brand_brochure,
            "Location" => $this->Location,
            "State" => $this->State,
            "Tier" => $this->Tier,
            "images" => $this->images,
            //"year" => $this->year,
            "image" => json_encode($this->image),
            "description" => $this->description,
            "short_description" => $this->short_description,
            "brand_image" => $this->brand_image,
            "email" => $this->email,
            "contact" => $this->contact,
            "status" => $this->status,
            "user_id" => Auth::user()->id,
        );
        
        Franchise::insert($values);
        $this->reset();
        $this->currentStep = 1;
        return redirect()->route('admin.dashboard');
     };
}
    public function render()
    {
        $tryin = Brand::all();
        $local = Location::select('state')->groupBy('state')->orderBy('state','ASC')->get();
        $city = Location::select('city')->groupBy('city')->orderBy('city','ASC')->get();
        return view('livewire.admin.admin-franchise-edit-component',['city' => $city,'local' => $local,'tryin' => $tryin]);
    }
}
