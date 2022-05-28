<?php

namespace App\Http\Livewire\Qrcode;

use App\Models\Genqr;
use App\Models\Qrtrack;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class GeneratorComponent extends Component
{
     public $link;
     public $type;
     public $expire;


     public function qrcodegenerate(){   
        $shop = new Genqr();
        $shop->link = $this->link;
        $shop->expire = $this->expire;
        $shop->type = $this->type;
        $shop->user_id = Auth::user()->id;
        $shop->save();
        //$this-> sendEmail($shop);
        session()->flash('message','Thanks, Your details has been uploaded.'); 
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        $qr = Genqr::get();
        return view('livewire.qrcode.generator-component',['qr' => $qr])->layout('layouts.admin');
    }
}
