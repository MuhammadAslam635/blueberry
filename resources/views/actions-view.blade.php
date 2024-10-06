<div>
    @if ($row->status != 'delivered' && $row->status != 'cancel')
    <x-mary-dropdown class="capitalize btn btn-sm {{ $row->status == 'pending'}} ? 'bg-secondary' :({{ $row->status == 'process'}}?'bg-primary':({{ $row->status == 'dispatch' }}?'bg-indigo-600':({{ $row->status == 'delivered'}} ? 'bg-green-600':'bg-red-600'))" label="{{ $row->status }}" >
        @switch($row->status)
            @case('pending')
                <x-mary-menu-item title="Update to Process" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'process')" />
                <x-mary-menu-item title="Update to Dispatch" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'dispatch')" />
                <x-mary-menu-item title="Update To Delivered" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'delivered')" />
                <x-mary-menu-item title="Cancel Order" icon="o-trash" wire:click.prevent="updateStatus({{ $row->id }}, 'cancel')" />
                @break
            @case('process')
                <x-mary-menu-item title="Update to Pending" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'pending')" />
                <x-mary-menu-item title="Update to Dispatch" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'dispatch')" />
                <x-mary-menu-item title="Update To Delivered" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'delivered')" />
                <x-mary-menu-item title="Cancel Order" icon="o-trash" wire:click.prevent="updateStatus({{ $row->id }}, 'cancel')" />
                @break
            @case('dispatch')
                <x-mary-menu-item title="Update to Pending" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'pending')" />
                <x-mary-menu-item title="Update to Process" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'process')" />
                <x-mary-menu-item title="Update To Delivered" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'delivered')" />
                <x-mary-menu-item title="Cancel Order" icon="o-trash" wire:click.prevent="updateStatus({{ $row->id }}, 'cancel')" />
                @break
            @default
                <x-mary-menu-item title="Update to Pending" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'pending')" />
                <x-mary-menu-item title="Update to Process" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'process')" />
                <x-mary-menu-item title="Update to Dispatch" icon="o-arrow-path" wire:click.prevent="updateStatus({{ $row->id }}, 'dispatch')" />
                <x-mary-menu-item title="Cancel Order" icon="o-trash" wire:click.prevent="updateStatus({{ $row->id }}, 'cancel')" />
        @endswitch
    </x-mary-dropdown>
    @else
        @if ($row->status == 'delivered')
            <span class="text-green-600 capitalize btn btn-sm">{{ $row->status }}</span>
        @else
            <span class="capitalize btn btn-sm text-accent">- Order Cancelled -</span>
        @endif
    @endif
</div>
