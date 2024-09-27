<x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">

    {{-- User --}}
    @if ($user = auth()->user())
        <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
            <x-slot:actions>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-mary-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff"
                        no-wire-navigate type="submit" />
                </form>

            </x-slot:actions>
        </x-mary-list-item>

        <x-mary-menu-separator />
    @endif
    <x-mary-menu activate-by-route>
        <x-mary-menu-item title="Dashboard" icon="o-home" link="###" />
        @can('viewAny', App\Models\Banner::class)
            <x-mary-menu-sub title="Hero Section" icon="o-photo"
                class="{{ request()->is('admin/banner*') ? 'active' : '' }}">
                <x-mary-menu-item title="Banners" icon="o-gif" link="{{ route('admin_banner') }}"
                    class="{{ request()->is('admin/banner') ? 'active' : '' }}" />
                <x-mary-menu-item title="Add Banner" icon="o-plus"
                    class="{{ request()->is('admin/banner/create') ? 'active' : '' }}" link="{{ route('createBanner') }}" />
            </x-mary-menu-sub>
        @endcan
    </x-mary-menu>
</x-slot:sidebar>
