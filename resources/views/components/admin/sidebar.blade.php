<x-slot:sidebar drawer="main-drawer" collapsible class="bg-fuchsia-800">

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
        @can('viewAny', App\Models\Category::class)
            <x-mary-menu-sub title="Catgeory Section" icon="o-tag"
                class="{{ request()->is('admin/categories*') ? 'active' : '' }}">
                <x-mary-menu-item title="Categories" icon="o-numbered-list" link="{{ route('admin_categories') }}"
                    class="{{ request()->is('admin/categories') ? 'active' : '' }}" />
                @can('create', App\Models\Category::class)
                    <x-mary-menu-item title="Add Category" icon="o-plus"
                        class="{{ request()->is('admin/categories/create') ? 'active' : '' }}"
                        link="{{ route('createCategory') }}" />
                @endcan
            </x-mary-menu-sub>
        @endcan
        @can('viewAny', App\Models\Tag::class)
            <x-mary-menu-sub title="Tag Section" icon="o-ticket"
                class="{{ request()->is('admin/tags*') ? 'active' : '' }}">
                <x-mary-menu-item title="Categories" icon="o-tag" link="{{ route('admin_tags') }}"
                    class="{{ request()->is('admin/tags') ? 'active' : '' }}" />
                @can('create', App\Models\Category::class)
                    <x-mary-menu-item title="Add Category" icon="o-plus"
                        class="{{ request()->is('admin/categories/create') ? 'active' : '' }}"
                        link="{{ route('createCategory') }}" />
                @endcan
            </x-mary-menu-sub>
        @endcan
    </x-mary-menu>
</x-slot:sidebar>
