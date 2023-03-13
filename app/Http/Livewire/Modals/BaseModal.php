<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;

class BaseModal extends Component
{
    public $isOpen = false;

    protected $listeners = ['toggleCreatePost'];

    public function toggleCreatePost(){
        $this->isOpen = !$this->isOpen;
    }
}
