<?php

namespace App\Livewire\Admin\Users;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Mary\Traits\Toast;

class UsersComponent extends Component
{
    use Toast;
    #[Layout('layouts.dashboard-layout')]


    public function mount(){}
    public function render()
    {
        return view('livewire.admin.users.users-component');
    }
}
