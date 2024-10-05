<div>
    <div class="flex justify-between lg:py-5 sm:py-1 md:py-1">
        <h1 class="font-bold text-primary text-md">Category Section</h1>
        <x-mary-button label="Create Category" link="{{ route('createCategory') }}" class="btn btn-sm text-primary" />
    </div>
    <div class="overflow-x-scroll">

        @livewire('table.category-table')
    </div>



</div>
