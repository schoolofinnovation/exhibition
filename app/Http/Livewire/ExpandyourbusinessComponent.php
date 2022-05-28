<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use PDF;

class ExpandyourbusinessComponent extends Component
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
      $pdf = PDF::loadView('livewire.document.expand-component', $data);
      return $pdf-> download('Expand_your_Business.pdf');
    }

    public function render()
    {
        $cat = Category::orderBy('industry','DESC')->get();
        return view('livewire.expandyourbusiness-component', ['cat'  => $cat]);
    }
}
