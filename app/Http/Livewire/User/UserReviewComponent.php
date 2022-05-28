<?php

namespace App\Http\Livewire\User;

use App\Models\OrderItem;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserReviewComponent extends Component
{
    public $order_item_id;
    public $comment;
    public $rating;


    public function mount($order_item_id)
    {
        $this->order_item_id = $order_item_id;
    }

    public function updated($fields)
    {
       $this->validateOnly($fields,[
        'rating' => 'required',
        'comment' => 'required',
       ]);
    }
    public function add()
    {
      $this->validate([
         'rating' => 'required',
         'comment' => 'required',
      ]);

      $review = new Review();
      $review->rating = $this->rating;
      $review->comment = $this->comment;
      $review->order_item_id = $this->order_item_id;
      $review->user_id = Auth::user()->id;
      $review->save();

      $orderItem = OrderItem::find($this->order_item_id);
      $orderItem->rstatus = true;
      $orderItem->save();
      return redirect()->route('user.dashboard');
      session()->flash('message','Thanks for sharing your review.');
    }


    public function render()
    {
        $orderItem = OrderItem::find($this->order_item_id);
        return view('livewire.user.user-review-component', ['orderItem' => $orderItem])->layout('layouts.eblog');
    }
}
