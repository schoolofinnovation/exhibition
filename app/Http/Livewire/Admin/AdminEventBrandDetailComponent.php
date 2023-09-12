<?php

namespace App\Http\Livewire\Admin;

use App\Models\Bcontact;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminEventBrandDetailComponent extends Component
{
    public $name;
    public $designation;
    public $email;
    public $phone;

    public $brand_name;
    public $brand_logo;
    public $organisation;
    public $industry;

    public $brand_id;
    public $user_id;

    public $formm;

    public function mount($brand_id)
    {
        $fattribute = Brand::find($brand_id);

       $this->brand_id = $fattribute->id;

       $this->brand_name = $fattribute->brand_name;
       $this->brand_logo = $fattribute->brand_logo;
       $this->organisation = $fattribute->organisation;
       $this->industry = $fattribute->industry;

    }


    public function brandBcontact()
    {
       $updatedetail = Brand::find($this->brand_id);
       $updatedetail->brand_name = $this->brand_name;
       $updatedetail->brand_logo = $this->brand_logo;
       $updatedetail->organisation = $this->organisation;
       $updatedetail->industry = $this->industry;
       $updatedetail->user_id = Auth::user()->id;
       $updatedetail->status = '1';
       $updatedetail->save();


       $updated = new Bcontact();
       $updated->name = $this->name;
       $updated->designation = $this->designation;
       $updated->email = $this->email;
       $updated->phone = $this->phone;
       $updated->user_id = Auth::user()->id;

       $updated->brand_id = $this->brand_id;

       $updatedetail->status = '1';
       $updatedetail->admstatus = '1';
       $updated->save();


    }

    public function render()
    {
        return view('livewire.admin.admin-event-brand-detail-component');
    }
}
