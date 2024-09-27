<?php

namespace App\View\Components\dashboard;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Welcome extends Component
{
    public function render(): View|Closure|string
    {
        $users = User::where('utype', 'usr')->count();
        $vendors = User::where('utype', 'ven')->count();
        $admin = User::where('utype', 'adm')->count();
        $blogger = User::where('utype', 'blog')->count();
        $orders = Order::count();
        $products = Product::count();
        $categories = Category::count();
        $subcategories = SubCategory::count();
        $tags = Tag::count();

        return view('components.dashboard.welcome', get_defined_vars());
    }
}
