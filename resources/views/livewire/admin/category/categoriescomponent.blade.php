<div>
    <x-mary-header title="Category Section" subtitle="All Categories Table">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-bolt" placeholder="Search Category.." wire:model.live='search' />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-plus" link="{{ route('createBanner') }}"
                class="btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New Category" />
        </x-slot:actions>
    </x-mary-header>

    <table class="table mb-0 align-middle table-hover table-centered">
        <thead class="bg-light-subtle">
            <tr>

                <th>Category</th>
                <th>Slug</th>
                <th>Logo</th>
                <th>SubCategories</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>

                    <td>
                        {{ $category->name }}
                    </td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <div class="avatar online">
                            <div class="w-12 rounded-full">
                                <img src="{{ asset('assets/img/category') }}/{{ $category->logo }}" />
                            </div>
                        </div>
                    </td>
                    <td>{{ $category->subCategories->count() }}</td>
                    <td><x-mary-badge
                            class="{{ $category->status == true ? 'bg-green-600 text-lime-50' : 'bg-red-600 text-orange-50' }} cursor-pointer"
                            value="{{ $category->status == true ? 'Active' : 'Inactive' }}"
                            wire:click="updateStatus({{ $category->id }})" />
                    </td>


                    <td>
                        <div class="flex gap-1">
                            <x-mary-button class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success"
                                icon="o-eye" wire:click="openModal({{ $category->id }})" />
                            @can('update', App\Models\Banner::class)
                                <x-mary-button class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success"
                                    icon="o-pencil" link="{{ route('updateBanner', ['banner' => $category->id]) }}" />
                            @endcan
                            <x-mary-button class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success"
                                icon="o-trash" wire:click="openDelModal({{ $category->id }})" />
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- // Deleting Modal --}}
    <x-mary-modal wire:model='deleteMod' title="Are you sure.You want To Delete this banner?">

        <x-slot:actions>
            {{-- Notice `onclick` is HTML --}}
            <x-mary-button label="No" wire:click='closeModal'
                class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success" />
            <x-mary-button label="Yes" class="btn btn-sm btn-warning hover:bg-[#d89a86] border-none text-success"
                wire:click="deleteBanner" />
        </x-slot:actions>
        </x-modal>

</div>
