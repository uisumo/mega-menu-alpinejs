<?php

namespace App\Livewire\Users\Pages;

use Livewire\Component;

class UserPageIndex extends Component
{
    
    public function render()
    {
        return view('livewire.users.pages.user-page-index')
            ->title('D3D - Home')
            ->layout('layouts.users.app');
    }
}
