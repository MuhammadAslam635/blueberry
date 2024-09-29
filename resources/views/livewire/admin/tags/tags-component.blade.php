<div>
    <x-mary-header title="Tag Section" subtitle="All Tags Table">

        <x-slot:actions>
            <x-mary-button icon="o-plus" link="{{ route('createCategory') }}"
                class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New Tag" />
        </x-slot:actions>
    </x-mary-header>

    @livewire('table.tag-table')



</div>
