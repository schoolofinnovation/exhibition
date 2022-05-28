<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class BlogDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.blog-dashboard-component')->layout('layouts.admin');
    }
}
