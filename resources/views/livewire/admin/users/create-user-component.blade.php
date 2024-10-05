
<div>
    <x-mary-header title="Create User" subtitle="All Users Table">

        @can('viewAny', App\Models\User::class)
            <x-slot:actions>
                <x-mary-button icon="o-minus" link="{{ route('admin_users') }}"
                    class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" label="Back" />
            </x-slot:actions>
        @endcan
    </x-mary-header>

    <x-mary-card>
        <x-mary-form wire:submit.prevent="save">

            <div class="grid grid-cols-2 gap-5">
                <x-mary-input label="Name" wire:model="name" />
            <x-mary-input label="Email" wire:model="email" />
            </div>
            <select class="w-full select select-bordered" wire:model='utype'>
                <option selected>Utype</option>
                <option value="usr">Customer</option>
                <option value="adm">Admin</option>
                <option value="sup">Super Admin</option>
                <option value="blo">Blog Writer</option>
                <option value="ven">Vendor / Seller</option>
            </select>
            @error('utype')
                <span class="text-red-700">{{ $message }}</span>
            @enderror
            <div class="grid grid-cols-2 gap-5">
            <x-mary-input type="password" label="Password" wire:model="password" />
            <x-mary-input type="password" label="Confirm Password" wire:model="password_confirmation" />
            </div>
           <div class="flex justify-end p-1">
            <x-mary-file wire:model.live="profile"  hint="Only Accept Image png,jpg | max:size=2mb" accept="image/png, image/jpeg" crop-after-change>
                @if($profile)
                <img src="{{ $profile->temporaryUrl()}}" class="h-40 rounded-lg" />
                @else
                <img src="{{ asset('assets/img/about/one.png') }}" class="h-40 rounded-lg" />
                @endif
            </x-mary-file>
           </div>
            <x-slot:actions>

                <x-mary-button label="Create User" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-mary-form>
    </x-mary-card>



</div>

