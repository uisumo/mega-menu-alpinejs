<?php

namespace App\Livewire\Users;

use Livewire\Component;

class WelcomeVideo extends Component
{
    public $openModal = false;

    public function showModal()
    {
        $this->openModal = true;
    }

    public function closeModal()
    {
        $this->openModal = false;
    }
    
    public function render()
    {
        return view('livewire.users.welcome-video')->layout('layouts.users.app');
    }
}
