<div>
    <x-mary-header title="Tag Section" subtitle="All Tags Table">

        @can('create',App\Models\Tag::class)
        <x-slot:actions>
            <x-mary-button icon="o-plus" wire:click='openDraw'
                class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New Tag" />
        </x-slot:actions>
        @endif
    </x-mary-header>
    <div >

    @livewire('table.tag-table')
    </div>

    <x-mary-drawer wire:model="openDrawer" class="w-11/12 lg:w-1/3" right>
        <div>
            <x-mary-card title="Create New Tag">
                <x-mary-form wire:submit="save">
                    <x-mary-input label="Tag" wire:model.live="name" wire:keydown='genSlug' />
                    <x-mary-input label="Tag Slug" wire:model="slug" money hint="Automatic generated" />

                    <x-slot:actions>
                        <x-mary-button label="Cancel" wire:click='closeDraw' />
                        <x-mary-button label="Click me!" class="btn-primary" type="submit" spinner="save" />
                    </x-slot:actions>
                </x-form>
            </x-mary-card>
        </div>

    </x-mary-drawer>
</div>
