<div>
    <x-mary-header title="Product Section" subtitle="All Product Table">

        @can('create',App\Models\Product::class)
        <x-slot:actions>
            <x-mary-button icon="o-plus" link="{{ route('createProduct') }}"
                class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New Product" />
        </x-slot:actions>
        @endcan
    </x-mary-header>

    <div>
        @livewire('table.product-table')
    </div>



</div>
