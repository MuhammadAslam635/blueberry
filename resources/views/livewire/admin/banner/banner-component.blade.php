<div>
    <x-mary-header title="Hero Section" subtitle="All Banners Table">
        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-bolt" placeholder="Search Hero Section..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-funnel" />
            <x-mary-button icon="o-plus" link="{{ route('createBanner') }}" class="btn-primary" label="Create New Hero" />
        </x-slot:actions>
    </x-mary-header>

    <table class="table mb-0 align-middle table-hover table-centered">
        <thead class="bg-light-subtle">
            <tr>
                <th style="width: 20px;">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1"></label>
                    </div>
                </th>
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
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2"
                                wire:model.live="bannerIds">

                        </div>
                    </td>

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
                        <div class="flex gap-2">
                            <x-mary-button class="btn btn-sm btn-info" icon="o-eye"
                                wire:click="openModal({{ $banner->id }})" />
                            @can('update', App\Models\Banner::class)
                                <x-mary-button class="btn btn-sm btn-primary" icon="o-pencil"
                                    link="{{ route('updateBanner', ['banner' => $banner->id]) }}" />
                            @endcan
                            <x-mary-button class="btn btn-sm btn-warning" icon="o-trash"
                                wire:click="openDelModal({{ $banner->id }})" />
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <x-mary-modal wire:model="openModalB" title="{{ $title }}" separator>
        <div>
            <p>Title: <span>{{ $title }}</span></p>
            <p>Heading One: <span>{{ $heading1 }}</span></p>
            <p>Heading Two: <span>{{ $heading2 }}</span></p>
            <p>Heading Three: <span>{{ $heading3 }}</span></p>
            <p>status: <span>{{ $status == true ? 'Active' : 'Inactive' }}</span></p>
            <p>Link: <span>{{ $url }}</span></p>
            <p class="flex justify-center p-1 my-1">
                <img src="{{ asset('assets/img/banner') }}/{{ $photo2 }}" alt="banner">
            </p>
        </div>

        <x-slot:actions>

            <x-mary-button label="Close" class="btn-primary" wire:click='closeModal' />
        </x-slot:actions>
    </x-mary-modal>
    {{-- // Deleting Modal --}}
    <x-mary-modal wire:model='deleteMod' title="Are you sure.You want To Delete this banner?">

        <x-slot:actions>
            {{-- Notice `onclick` is HTML --}}
            <x-mary-button label="No" wire:click='closeModal' />
            <x-mary-button label="Yes" class="btn-primary" wire:click="deleteBanner" />
        </x-slot:actions>
        </x-modal>

</div>
