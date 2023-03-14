<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ViewPost extends Component
{

    protected $listeners = [
      'showPost'=>'render'
    ];

    public function render()
    {
        return view('livewire.view-post');
    }
}
