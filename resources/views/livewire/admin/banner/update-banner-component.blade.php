<div>
    <x-mary-header title="Create/Add New Hero Banner" subtitle="Hero Form" separator />
    <x-mary-form wire:submit.prevent='updateBanner' no-separator>

        <x-mary-input label="Title" placeholder="flate 30% off" wire:model.live='title' />
        <x-mary-input label="Heading One" placeholder="Explore" wire:model.live='heading1' />
        <x-mary-input label="Heading Two" placeholder="Healty" wire:model.live='heading2' />
        <x-mary-input label="Heading Three" placeholder="& Fresh Fruits" wire:model.live='heading3' />
        <x-mary-input label="Link" placeholder="https://....." wire:model.live='url' />
        <select class="w-full border border-primary select" wire:model='status'>
            <option value="" selected>Choose Status</option>
            <option value="1">Active</option>
            <option value="0">InActive</option>
        </select>
        <x-mary-file wire:model.live='photo' label="Baner Image" hint="Only Image" />
        <div class="p-2 my-2">
            @if ($photo)
                <img src="{{ $photo->temporaryurl() }}" class="h-40 rounded-lg" />
            @else
                <img src="{{ asset('assets/img/banner') }}/{{ $photo2 }}" class="h-40 rounded-lg" />
            @endif
        </div>

        <x-slot:actions>

            <x-mary-button label="Update" class="btn-primary" type="submit" spinner="updateBanner" />
        </x-slot:actions>

    </x-mary-form>

</div>
