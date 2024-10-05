<?php

namespace App\Livewire\Admin\Users;

use App\helper\ErrorLogHelper;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\Toast;

class EditUserComponent extends Component
{
    use Toast;
    use WithFileUploads;

    #[Layout('layouts.dashboard-layout')]

    #[Validate('required|string')]
    public $name;

    #[Validate('required|email|unique:users,email,id')]
    public $email;

    #[Validate('required|string|in:usr,adm,sup,blo,ven')]
    public $utype;

    #[Validate('required|image|max:1024')]
    public $profileNew;

    public $profile;

    public $userId;

    public function mount($id): void
    {
        $this->userId = $id;
        $user = User::find($id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->utype = $user->utype;
        $this->profile = $user->profile_photo_path;
    }

    public function updateUser()
    {
        $this->validate();
        try {
            $user = User::find($this->userId);
            $user->name = $this->name;
            $user->email = $this->email;
            $user->utype = $this->utype;
            $user->email_verified_at = Carbon::now();
            if ($this->profileNew) {
                $image = Carbon::now()->timestamp.'.'.$this->profileNew->extension();
                $this->profileNew->storeAs('assets/img/users', $image);
                $user->profile_photo_path = $image;
            }
            $user->save();
            $this->success('User  Updated');
        } catch (\Exception $e) {
            (new ErrorLogHelper)('Updating User', $e->getMessage());
            $this->error('Please Check error logs');
        }
    }

    public function render()
    {
        return view('livewire.admin.users.edit-user-component');
    }
}
