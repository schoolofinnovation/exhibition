<?php

namespace App\Http\Livewire\Seller;

use App\Mail\CareerMail;
use App\Models\Category;
use App\Models\Franchise;
use App\Models\Location;
use App\Models\Sector;
use App\Models\Sprofile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
Use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class SellerProfileComponent extends Component
{
  //company info
    public $co_name;
    public $slug;
    public $co_logo;
    public $title;
    public $about;
    public $desc;

    //Social links
    public $twitter;
    public $youtube;
    public $linkedin;
    public $facebook;
    public $instagram;

    //looking to update//public $official_website;
    //looking to update//public $official_banner //public $image;
    public $official_email;
    public $board_contact;
    public $landline;
    public $est_year;
    public $turnover;
    
    //address
    public $off_address;
    public $off_city;
    public $off_province;
    public $off_country;
    public $off_zipcode;

    //owner
    public $owner_name;
    public $email;
    public $phone;
    public $designation;
    public $social_link;
    public $type_social;

    public $ceo_name;
    public $c_email;
    public $c_contact;

    //extra
    public $business_head_name;
    public $bh_email;
    public $bh_contact;

    public $sale_head_name;
    public $fh_email;
    public $fh_contact;

    public $marketing_head_name;
    public $mh_email;
    public $mh_contact;
    public $status;
    //seller which type of profile = SLR
    public $profile_type;
    public $user_id;
    public $terms;
   //step function
    public $step;
    public $totalSteps = 4;
    public $currentStep = 1;
    
    public $industry = null;
    public $selectedsector = null;
    public $sector ;
    public $secto = null;

    public $photo;

    use WithFileUploads;
    
    public function save(){
        $this->validate([
            'photo' => 'image|max:1024',

        ]);
        $this->photo->store('photos');
    }
    
    public function updatedIndustry($category_id){
        $this->secto = Sector::where('category_id', $category_id)->get();
    }

    public function mount(){
        $this->profile_type="SLR";  
        $this->status = 1; 
        $this->currentStep = 1;
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
       $this->currentStep++;
       if($this->currentStep > $this->totalSteps){
        $this->currentStep = $this->totalSteps;
       }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
       $this->currentStep--;
       if($this->currentStep < 1){
        $this->currentStep = 1;
       }
    }

    //mailing function
    public function sendEmail($values){
        $data = ['email' => $this->email,'title' => 'contact us ', 'body' => 'thanks for doing' ];
        Mail::to('laravel8coi@gmail.com')
            ->cc('laravel8coi@gmail.com')
            ->bcc('laravel8coi@gmail.com')
            ->send(new CareerMail($data));
    }
    
    public function generateSlug(){
        $this->slug = Str::slug($this->co_name,'-');
    }

    use WithFileUploads;

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'co_name'=> 'required|string',
                'co_logo'=> 'required|mimes:jpg,png,jpeg|max:1024',
                'industry'=> 'required',
                'sector' => 'required',
                'turnover'=> 'required|string',
                'est_year'=> 'required|digits:4',
                 //'location'=> 'required',
                //'official_website' => 'required|array|min:2|max:3',
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'official_email'=> 'required|email|unique:sprofiles',
                'landline'=> 'required',
                'off_address' => 'required',
                'off_city'=> 'required',
                'off_province'=> 'required',
                'off_country'=> 'required',
                'off_zipcode' => 'required',
                'board_contact'=> 'required',
            ]);
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'twitter'=> 'required',
                'facebook'=> 'required',
                'linkedin'=> 'required',
                'sector' => 'required',
                'youtube'=> 'required',
            ]);
        }
    }

    public function add(){
        $this->resetErrorBag();
        if($this->currentStep == 4){
              $this->validate([
                'terms' => 'accepted',
                'owner_name'=> 'required|string',
                'email'=> 'required|email|unique:sprofiles',
                'phone'=> 'required|digits:10',
                'designation' => 'required',
                'type_social'=> 'required',
                'social_link' => 'required',
                'ceo_name'=> 'required|string',
                'c_email'=> 'required|email|unique:sprofiles',
                'c_contact'=> 'required|digits:10',
                'business_head_name' => 'required|string',
                'bh_email'=> 'required|email|unique:sprofiles',
                'bh_contact'=> 'required|digits:10',
                'sale_head_name'=> 'required|string',
                'fh_email'=> 'required|email|unique:sprofiles',
                'fh_contact' => 'required|digits:10',
                'marketing_head_name'=> 'required|string',
                'mh_email' => 'required|email|unique:sprofiles',
                'mh_contact'=> 'required|digits:10',
            ]);
        }

         $logo_name = 'logo_'.$this->co_logo->getClientOriginalName();
         $upload_logo = $this->co_logo->storeAs('Storage/profile_logo', $logo_name);

         if($upload_logo){
            $values = array(
                "co_name" => $this->co_name,
                "slug" => $this->slug,
                "co_logo" => $this->co_logo,
                "industry" => $this->industry,
                "sector" => $this->sector,
                "title" => $this->title,
                "about" => $this->about,
                "desc" => $this->desc,
                "twitter" => $this->twitter,
                "youtube" => $this->youtube,
                "linkedin" => $this->linkedin,
                "facebook" => $this->facebook,
                "instagram" => $this->instagram,
                //"official_website" => $this->official_website,
                "official_email" => $this->official_email,
                "board_contact" => $this->board_contact,
                "landline" => $this->landline,
                "est_year" => $this->est_year,
                "turnover" => $this->turnover,
                "off_address" => $this->off_address,
                "off_city" => $this->off_city,
                "off_province" => $this->off_province,
                "off_country" => $this->off_country,
                "off_zipcode" => $this->off_zipcode,
                "owner_name" => $this->owner_name,
                "email" => $this->email,
                "phone" => $this->phone,
                "designation" => $this->designation,
                "social_link" => $this->social_link,
                "type_social" => $this->type_social,
                "ceo_name" => $this->ceo_name,
                "c_email" => $this->c_email,
                "c_contact" => $this->c_contact,
                "business_head_name" => $this->business_head_name,
                "bh_email" => $this->bh_email,
                "bh_contact" => $this->bh_contact,
                "sale_head_name" => $this->sale_head_name,
                "fh_email" => $this->fh_email,
                "fh_contact" => $this->fh_contact,
                "marketing_head_name" => $this->marketing_head_name,
                "mh_email" => $this->mh_email,
                "mh_contact" => $this->mh_contact,
                "status" => $this->status,
                "profile_type" => $this->profile_type,
                "user_id" => Auth::user()->id
            );
            
            Sprofile::insert($values);
            
            $this->reset();
           // $this->currentStep = 1;
            $data = ['co_name' => $this->co_name, 'email' => $this->email];
            $this-> sendEmail($values);
            return redirect()->route('seller.dashboard',$data);
         }
    }
    
    public function render()
    {
        $industr = Category::orderBy('industry','ASC')->get();
        $secto = Sector::orderBy('sector','ASC')->get();
       
        return view('livewire.seller.seller-profile-component',['industr' => $industr, 'secto' => $secto])->layout('layouts.eblog');
    }
}
