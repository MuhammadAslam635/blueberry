<div>
    <x-mary-header title="Create Category" subtitle="Category Form" separator />
    <x-mary-form wire:submit.prevent='save' no-separator>

        <x-mary-input label="Name" placeholder="name" wire:model.live='name' wire:keydown='genSlug' />
        <x-mary-input label="Slug" placeholder="Auto Generated" wire:model.live='slug' />
        <select class="w-full border border-primary select" wire:model='status'>
            <option value="" selected>Choose Status</option>
            <option value="active">Active</option>
            <option value="inactive">InActive</option>
        </select>
        <x-mary-file wire:model.live='logo' label="Baner Image" hint="Only Image" />
        <div class="p-2 my-2">
            @if ($logo)
                <img src="{{ $logo->temporaryurl() }}" class="h-40 rounded-lg" />
            @else
                <img src="{{ asset('assets/img/banner-one/one.png') }}" class="h-40 rounded-lg" />
            @endif
        </div>

        <x-slot:actions>

            <x-mary-button label="Submit" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>

    </x-mary-form>

</div>
