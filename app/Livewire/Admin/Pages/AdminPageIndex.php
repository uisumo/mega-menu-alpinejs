<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Component;

class AdminPageIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.admin-page-index')
            ->title('Admin Home')
            ->layout('layouts.admin.admin-app');
    }
}
