<?php

namespace App\Livewire\Admin\Users;

use App\helper\ErrorLogHelper;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;
use Mary\Traits\WithMediaSync;

class CreateUserComponent extends Component
{
    use Toast;
    use WithFileUploads, WithMediaSync;

    #[Layout('layouts.dashboard-layout')]

    #[Validate('required|string')]
    public $name;

    #[Validate('required|email|unique:users,email')]
    public $email;

    #[Validate('required|string|in:usr,adm,sup,blo,ven')]
    public $utype;

    #[Validate('required|min:6|confirmed')]
    public $password;

    public $password_confirmation;

    #[Validate(['profile' => 'nullable|image|max:1024'])]
    public $profile;

    public function save()
    {

        $this->validate();

        try {

            $user = new User;

            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = Hash::make($this->password);
            $user->utype = $this->utype;
            $user->email_verified_at = Carbon::now();
            if ($this->profile) {
                $image = Carbon::now()->timestamp.'.'.$this->profile->extension();
                $this->profile->storeAs('assets/img/users', $image);
                $user->profile_photo_path = $image;
            }
            $user->save();

            $this->dispatch('pg:eventRefresh-UserTable');
            $this->success('User '.$user->utype.' Create');
            $this->reset();
        } catch (\Exception $e) {
            (new ErrorLogHelper)('Creating User', $e->getMessage());
            $this->error('Please Check error logs');
        }
    }

    public function render()
    {
        return view('livewire.admin.users.create-user-component');
    }
}
