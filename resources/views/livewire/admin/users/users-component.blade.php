<div>
    <x-mary-header title="Users Management" subtitle="All Users Table">

        @can('create',App\Models\User::class)
        <x-slot:actions>
            <x-mary-button icon="o-plus" link="{{ route('createUser') }}"
                class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New Product" />
        </x-slot:actions>
        @endcan
    </x-mary-header>

    @livewire('table.user-table')
</div>

