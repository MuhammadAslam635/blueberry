<div>
    <x-mary-header title="Category Section" subtitle="All Categories Table">

        <x-slot:actions>
            <x-mary-button icon="o-plus" link="{{ route('createCategory') }}"
                class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New Category" />
        </x-slot:actions>
    </x-mary-header>

    @livewire('table.category-table')



</div>
