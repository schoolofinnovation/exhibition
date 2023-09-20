<?php

namespace App\Http\Livewire\Admin;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminQuestionComponent extends Component
{

    public $user_id;
    public $status;
    public $admstatus;
    public $question;
    public $quest;

    public function questadd()
    {
        $finfe = new Question();
        $finfe->question = $this->quest;
        $finfe->user_id = Auth::user()->id;
        $finfe->status = '1';
        $finfe->admstatus = '1';
        $finfe->save();
    }



    public function render()
    {
        return view('livewire.admin.admin-question-component');
    }
}
