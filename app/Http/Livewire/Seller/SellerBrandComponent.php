<?php

namespace App\Http\Livewire\Seller;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Sector;
use App\Models\Sprofile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class SellerBrandComponent extends Component
{
    public $newstore;
    public $brand_name;
    public $slug;
    public $brand_logo;
    public $tag_line;
    //public $industry;
    //public $sector;
    public $tittle_line;
    public $short_desc;
    public $long_desc;
    public $brand_est_year;
    public $about;
    public $official_website;
    //text
    public $business_model;
    public $type_business_model;
    public $no_of_store;
    public $document;
    public $brochure;
    public $banner;
    public $twitter;
    public $facebook;
    public $instagram;
    public $linkedin;
    public $youtube;
    public $brand_identity_video;
    public $product_video;
    //user_required_details
    public $user_email;
    public $user_contact;
    public $brand_head_name;
    public $bh_email;
    public $bh_contact;
    public $user_id;
    public $sprofile_id;
    public $sprofile;
    public $category_id;
    public $status;
    public $cat;
    public $step;
    public $totalSteps = 4;
    public $currentStep = 1;

    public $Industry = null;
    public $selectedsector = null;
    public $sector ;
    public $secto = null;

    public function updatedIndustry($category_id){
        $this->secto = Sector::where('category_id', $category_id)->get();
    }

    use WithFileUploads;
    public function mount(){
        $this->profile_type="SLR";  
        $this->status = 1; 
        $this->currentStep = 1;
        $this->profile_type="SLR";  
        $this->status = "deactive";
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
     if($this->currentStep > $this->totalSteps){
        $this->currentStep = $this->totalSteps;
       }
    }

    public function decreaseStep() {
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
           $this->currentStep = 1;
       }
    }


    // $orderItem->order_id = $profile->id;
    
    public function generateSlug(){
        $this->slug = Str::slug($this->brand_name,'-');
    }

   

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'brand_name'=> 'required|string',
                'Industry'=> 'required',
                'sector' => 'required',
                //'location'=> 'required',
                'no_of_store'=> 'required|string',
                'brand_est_year'=> 'required|digits:4',
                'newstore'=> 'required',
                'official_website'=> 'required',
                //'tag_line'=> 'required',
                //'tittle_line'=> 'required|string',
                //'short_desc'=> 'required|string',
                //'long_desc'=> 'required|string',
                //'about'=> 'required|string',
                //'business_model' => 'required|string',
                //'type_business_model' => 'required|string',
              //'category_id' => 'required',
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'twitter'=> 'required',
                'facebook'=> 'required',
                'linkedin'=> 'required',
                'sector' => 'required',
                'youtube'=> 'required',
            ]);
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'brand_logo'=> 'required',
                //'brochure'=> 'required',
                //'document'=> 'required',
                //'banner'=> 'required',
                //'brand_identity_video' => 'required',
                //'product_video'=> 'required',
            ]);
        }
    }
        public function add(){
            $this->resetErrorBag();
            if($this->currentStep == 4){
                  $this->validate([
                    'terms' => 'accepted',
                    'brand_head_name'=> 'required|string',
                    'bh_email'=> 'required|email|unique:brands',
                    'bh_contact'=> 'required|digits:10',
                    'user_email' => 'required|email|unique:brands',
                    'user_contact'=> 'required|digits:10',           
                ]);
            }
          
         $logo_name = 'brandlogo_'.$this->brand_logo->getClientOriginalName();
         $upload_logo = $this->brand_logo->storeAs('brands', $logo_name);

         $brochure_name = 'brochure_'.$this->brochure->getClientOriginalName();
         $upload_logo = $this->brochure->storeAs('brochure', $brochure_name);

         $document_name = 'document_'.$this->document->getClientOriginalName();
         $upload_logo = $this->document->storeAs('document', $document_name);

         $banner_name = 'banner_'.$this->banner->getClientOriginalName();
         $upload_logo = $this->banner->storeAs('banner', $banner_name);

         $identityvideo_name = 'identityvideo_'.$this->brand_identity_video->getClientOriginalName();
         $upload_logo = $this->brand_identity_video->storeAs('brandidentityvideo', $identityvideo_name);

         $productvideo_name = 'productvideo_'.$this->product_video->getClientOriginalName();
         $upload_logo = $this->product_video->storeAs('productvideo', $productvideo_name);


         if($upload_logo){
            $values = array(
                "brand_name" => $this->brand_name,
                "slug" => $this->slug,
                "tag_line" => $this->tag_line,
                "Industry" => $this->industry,
                "sector" => $this->sector,
                "tittle_line" => $this->tittle_line,
                "short_desc" => $this->short_desc,
                "long_desc" => $this->long_desc,
                "brand_est_year" => $this->brand_est_year,
                "about" => $this->about,
               
                "business_model" => $this->business_model,
                "type_business_model" => $this->type_business_model,
                "no_of_store" => $this->no_of_store,
                "brand_logo" => $logo_name,
                "banner" => $banner_name,
                "brand_identity_video" => $identityvideo_name,
                "product_video" => $productvideo_name,
                "document" => $document_name,
                "brochure" => $brochure_name,

                "official_website" => $this->official_website,
                
                "twitter" => $this->twitter,
                "facebook" => $this->facebook,
                "instagram" => $this->instagram,
                "linkedin" => $this->linkedin,
                "youtube" => $this->youtube,
                
                "user_email" => $this->user_email,
                "user_contact" => $this->user_contact,

                "brand_head_name" => $this->brand_head_name,
                "bh_email" => $this->bh_email,
                "bh_contact" => $this->bh_contact,

                "status" => $this->status,
                "profile_type" => Auth::user()->sprofile->id,
                "user_id" => Auth::user()->id,
            );
            
            Brand::insert($values);
            $this->reset();
            $this->currentStep = 1;
         };
    }
 
      public function render()
    {
        $industr = Category::orderBy('industry','ASC')->get();
        $secto = Sector::orderBy('sector','ASC')->get();

        return view('livewire.seller.seller-brand-component',['industr' => $industr, 'secto' => $secto])->layout('layouts.eblog');
           
    }
}
