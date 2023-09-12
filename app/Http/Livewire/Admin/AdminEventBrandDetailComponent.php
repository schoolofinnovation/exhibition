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

    public $status;
    public $admstatus;

    public $formm;

    public function mount($brand_id)
    {
        $fattribute = Brand::find($brand_id);

       $this->brand_id = $fattribute->id;

       $this->brand_name = $fattribute->brand_name;
       $this->brand_logo = $fattribute->brand_logo;
       $this->organisation = $fattribute->organisation;
       $this->industry = $fattribute->industry;

       $this->status = '1';
       $this->admstatus = '1';

    }


    public function brandBcontact()
    {
       $updatedetail = Brand::find($this->brand_id);
       $updatedetail->brand_name = $this->brand_name;
       $updatedetail->brand_logo = $this->brand_logo;

       $updatedetail->organisation = $this->organisation;

       $updatedetail->industry = $this->industry;
       $updatedetail->user_id = Auth::user()->id;
       $updatedetail->status = $this->status;
       $updatedetail->save();


       $updated = new Bcontact();
       $updated->name = $this->name;
       $updated->designation = $this->designation;
       $updated->email = $this->email;
       $updated->phone = $this->phone;
       $updated->user_id = Auth::user()->id;

       $updated->brand_id = $this->brand_id;

       $updated->status = $this->status;
       $updated->admstatus = $this->admstatus;
       $updated->save();
        
       //return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
       return redirect()->url()->previous();

    }


    public function del($id)
    {
       $delee = Bcontact::find($id);
       $delee->delete();
    }


    public function render()
    {
        $getContact = Bcontact::where('brand_id', $this->brand_id)->get();
        return view('livewire.admin.admin-event-brand-detail-component', ['getContact' => $getContact]);
    }
}
