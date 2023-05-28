<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cag;
use App\Models\Mag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class AdminBlogComponent extends Component
{   public $slug;
    public $tittle;
    public $desc;
    public $s_desc;
    public $tag;
    public $cag_id;
    public $status;
    public $type;
    public $image;
    public $user_id;
    public $board;

    public function mount($board)
    {
        $this->board = $board;
        $this->type = "e";  
        $this->status = "1"; 
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->tittle,'-');
    }

   

    Use WithFileUploads;
    public function add() {
    
        $blog = new Mag();
        $blog->tittle = $this->tittle;
        $blog->slug = $this->slug;
        $blogdesc = explode(",,",$this->desc);
        $blog->desc = json_encode($blogdesc);
        $blog->s_desc = $this->s_desc;
        $blog->user_id = Auth::user()->id;
        $blog->type = $this->type;
        $blog->status = $this->status;
        //dd($blog);
        $blog->save();
        session()->flash('message',' Congrats, Blog has been posted Successfully. we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard',['board' => 'blog']);
    }

    

    public function dateImage()
    {
       // $fattribute = Mag::find($this->blog_id);
       
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        //$fattribute->image = $newimage;

        //$fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
       // return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }
    
    public function render()
    {
        $category = Cag::orderBy('tag','ASC')->get();
        return view('livewire.admin.admin-blog-component',['category'=> $category])->layout('layouts.admin');
    }
}
