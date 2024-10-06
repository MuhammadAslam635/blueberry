<x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100">

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
        <x-mary-menu-item title="Dashboard" class="{{ request()->is('management/dashboard') ? 'bg-primary' : '' }}"
            icon="o-home" link="{{ route('dashboard') }}" />
        <x-mary-menu-sub title="App Management" icon="o-cube-transparent">
            @can('viewAny', App\Models\Banner::class)
                <x-mary-menu-sub title="Hero Section" icon="o-photo"
                    class="{{ request()->is('management/banner*') ? 'bg-primary' : '' }}">
                    <x-mary-menu-item title="Banners" icon="o-gif" link="{{ route('admin_banner') }}"
                        class="{{ request()->is('management/banner') ? 'bg-primary' : '' }}" />
                    <x-mary-menu-item title="Add Banner" icon="o-plus"
                        class="{{ request()->is('management/banner/create') ? 'bg-primary' : '' }}"
                        link="{{ route('createBanner') }}" />
                </x-mary-menu-sub>
            @endcan
            @can('viewAny', App\Models\Category::class)
                <x-mary-menu-sub title="Catgeory Section" icon="o-tag"
                    class="{{ request()->is('management/categories*') ? 'bg-primary' : '' }}">
                    <x-mary-menu-item title="Categories" icon="o-numbered-list" link="{{ route('admin_categories') }}"
                        class="{{ request()->is('management/categories') ? 'bg-primary' : '' }}" />
                    @can('create', App\Models\Category::class)
                        <x-mary-menu-item title="Add Category" icon="o-plus"
                            class="{{ request()->is('management/categories/create') ? 'bg-primary' : '' }}"
                            link="{{ route('createCategory') }}" />
                    @endcan
                </x-mary-menu-sub>
            @endcan
            @can('viewAny', App\Models\SubCategory::class)
                <x-mary-menu-item title="SubCatgeories" icon="o-rectangle-group" link="{{ route('admin_sub_categories') }}"
                    class="{{ request()->is('management/sub-categories') ? 'bg-primary' : '' }}" />
                @endif
                @can('viewAny', App\Models\Tag::class)
                    <x-mary-menu-item title="Tags" icon="o-tag" link="{{ route('admin_tags') }}"
                        class="{{ request()->is('management/tags') ? 'bg-primary' : '' }}" />
                @endcan
                @can('viewAny', App\Models\Product::class)
                    <x-mary-menu-item title="Products" icon="o-building-storefront" link="{{ route('admin_products') }}"
                        class="{{ request()->is('management/products') ? 'bg-primary' : '' }}" />
                @endcan
                @can('viewAny', App\Models\User::class)
                    <x-mary-menu-item title="Users" icon="o-users" link="{{ route('admin_users') }}"
                        class="{{ request()->is('management/users') ? 'bg-primary' : '' }}" />
                @endcan
            </x-mary-menu-sub>
            <x-mary-menu-sub title="Order Management" icon="o-building-storefront">
                @can('viewAny',App\Models\Order::class)
                <x-mary-menu-item title="Orders" icon="o-shopping-cart" link="{{ route('admin_orders') }}"
                            class="{{ request()->is('management/orders') ? 'bg-primary' : '' }}" />
                @endcan
            </x-mary-menu>
        </x-mary-menu>

    </x-slot:sidebar>
