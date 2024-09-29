<div>
    <x-mary-header title="Edit {{ $name }} Category" subtitle="Edit Category Form" separator />
    <x-mary-form wire:submit.prevent='updateCategory' no-separator>

        <x-mary-input label="Name" placeholder="name" wire:model.live='name' wire:keydown='genSlug' />
        <x-mary-input label="Slug" placeholder="Auto Generated" wire:model.live='slug' />
        <select class="w-full border border-primary select" wire:model.live='status'>
            <option value="" selected>Choose Status</option>
            <option value="active">Active</option>
            <option value="inactive">InActive</option>
        </select>
        <x-mary-file wire:model.live='newLogo' label="Category Image" hint="Only Image" />
        <div class="p-2 my-2">
            @if ($newLogo)
                <img src="{{ $newLogo->temporaryurl() }}" class="h-40 rounded-lg" />
            @elseif($logo)
            <img src="{{ asset('assets/img/category') }}/{{ $logo }}" class="h-40 rounded-lg" />
            @else
                <img src="{{ asset('assets/img/banner-one/one.png') }}" class="h-40 rounded-lg" />
            @endif
        </div>

        <x-slot:actions>

            <x-mary-button label="Submit" class="btn-primary" type="submit" spinner="updateCategory" />
        </x-slot:actions>

    </x-mary-form>

</div>
