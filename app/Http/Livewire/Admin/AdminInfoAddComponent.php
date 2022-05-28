<?php

namespace App\Http\Livewire\Admin;

use App\Models\Info;
use Livewire\Component;

class AdminInfoAddComponent extends Component
{
    public $name;
    public $phone;
    public $type_phone;
    public $address;
    public $type_address;
    public $email;
    public $type_email;
    public $map;
    public $country;
    public $location;
    public $status;
    public $twiter;
    public $facebook;
    public $instagram;
    public $youtube;
    
    

    public function add() {
    
        $info = new Info() ;
          //$info->slug = $this->slug;
          
          $info->name = $this->name;
          $info->phone = $this->phone;
          $info->type_phone = $this->type_phone;
          $info->address = $this->address;
          $info->type_address = $this->type_address;
          $info->email = $this->email;
          $info->type_email = $this->type_email;
          $info->map = $this->map;
          $info->country = $this->country;
          $info->location = $this->location;
          $info->status = $this->status;
          $info->twiter = $this->twiter;
          $info->facebook = $this->facebook;
          $info->instagram = $this->instagram;
          $info->youtube = $this->youtube;
          $info->save();
          session()->flash('message','Entity has been uploaded Successfully.'); 
          return redirect()->route('admin.info');
      }
 
      
    public function render()
    {
        $infos = info::all();   
        return view('livewire.admin.admin-info-add-component',['infos'=>$infos])->layout('layouts.admin');
    }
}
