<div>
    <x-mary-header title="SubCategory Section" subtitle="All Subcategories Table">

        @can('create',App\Models\Tag::class)
        <x-slot:actions>
            <x-mary-button icon="o-plus" wire:click='openDraw'
                class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New SubCatgeory" />
        </x-slot:actions>
        @endif
    </x-mary-header>
    <x-mary-card title="Create SubCategory Tag">
        <x-mary-form wire:submit="udpateSubCategory">
            <x-mary-input label="Tag" wire:model.live="name" wire:keydown='genSlug' />
            <x-mary-input label="Tag Slug" wire:model="slug" money hint="Automatic generated" />
            <x-mary-select label="Category" icon="o-tag" :options="$categories" wire:model.live="category_id" inline />
            <x-slot:actions>
                <x-mary-button label="Cancel" link="{{ route('admin_sub_categories') }}" />
                <x-mary-button label="Click me!" class="btn-primary" type="submit" spinner="udpateSubCategory" />
            </x-slot:actions>
        </x-form>
    </x-mary-card>


</div>
