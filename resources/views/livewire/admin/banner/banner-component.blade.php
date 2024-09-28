<div>
    <x-mary-header title="Hero Section" subtitle="All Banners Table">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-bolt" placeholder="Search Title.." wire:model.live='search' />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-plus" link="{{ route('createBanner') }}"
                class="btn-primary hover:bg-[#d89a86] border-none text-success" label="Create New Hero" />
        </x-slot:actions>
    </x-mary-header>

    <table class="table mb-0 align-middle table-hover table-centered">
        <thead class="bg-light-subtle">
            <tr>

                <th>Banner Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>


                    <td>

                        <div class="avatar online">
                            <div class="w-24 rounded-full">
                                <img src="{{ asset('assets/img/banner') }}/{{ $banner->image }}" />
                            </div>
                        </div>
                    </td>
                    <td>{{ $banner->title }}</td>
                    <td><x-mary-badge
                            class="{{ $banner->status == true ? 'bg-green-600 text-lime-50' : 'bg-red-600 text-orange-50' }} cursor-pointer"
                            value="{{ $banner->status == true ? 'Active' : 'Inactive' }}"
                            wire:click="updateStatus({{ $banner->id }})" />
                    </td>
                    <td>{{ $banner->link }}</td>

                    <td>
                        <div class="flex gap-1">
                            <x-mary-button class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success"
                                icon="o-eye" wire:click="openModal({{ $banner->id }})" />
                            @can('update', App\Models\Banner::class)
                                <x-mary-button class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success"
                                    icon="o-pencil" link="{{ route('updateBanner', ['banner' => $banner->id]) }}" />
                            @endcan
                            <x-mary-button class="btn btn-sm btn-primary hover:bg-[#d89a86] border-none text-success"
                                icon="o-trash" wire:click="openDelModal({{ $banner->id }})" />
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <x-mary-modal wire:model="openModalB" title="{{ $title }}" separator>
        <div class="flex flex-col gap-3 p-5">
            <p><b>Title:</b> <span>{{ $title }}</span></p>
            <p><b>Heading One: </b><span>{{ $heading1 }}</span></p>
            <p><b>Heading Two: </b><span>{{ $heading2 }}</span></p>
            <p><b>Heading Three: </b><span>{{ $heading3 }}</span></p>
            <p><b>status: </b><span>{{ $status == true ? 'Active' : 'Inactive' }}</span></p>
            <p><b>Link: </b><span>{{ $url }}</span></p>
            <p class="flex justify-center p-1 my-1">
                <img src="{{ asset('assets/img/banner') }}/{{ $photo2 }}" class="w-[120px] h-[120px]"
                    alt="banner">
            </p>
        </div>

        <x-slot:actions>

            <x-mary-button label="Close" class="btn-primary " wire:click='closeModal' />
        </x-slot:actions>
    </x-mary-modal>
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
