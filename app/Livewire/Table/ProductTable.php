<?php

namespace App\Livewire\table;

use App\helper\ErrorLogHelper;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use Illuminate\Support\Facades\Blade;
use Mary\Traits\Toast;

final class ProductTable extends PowerGridComponent
{
    use WithExport;
    use Toast;
    public string $tableName = 'ProductTable';
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::exportable(fileName: 'my-export-file')
            ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
                PowerGrid::header()
                 ->showToggleColumns()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): ?Builder
    {
        return Product::query()->with(['subCategory','vendor']);
    }

    public function relationSearch(): array
    {
        return [
            'subCatgeory'=>[
                'name'
            ]
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('vendor', fn($product)=>e($product->vendor?->user?->name ?? 'N/A'))


            ->add('name', function ($model) {
                $name = $model->name;
                $image = $model->image ?? 'assets/img/new-product/1.jpg';
                $image = asset($image);

                return
                "
                <div class='flex items-center justify-center'>
                <p >
                 <div class='avatar'>
                <div class='w-12 rounded-full'>
                    <img src='$image' />
                </div>
                </div>
                <span class='px-2'>$name</span>

                </p>
                </div>
                ";
            })
            ->add('sub_category', fn ($product) => e($product->subCategory->name))
            ->add('slug')
            ->add('price')
            ->add('sale_price')
            ->add('qty')
            ->add('sale_qty')
            ->add('sku')
            ->add('stock', function ($product) {
                $stock = $product->stock;
                $id = $product->id;
                return "<span class='".($stock == 'in' ? 'text-green-500' : 'text-red-500')." btn btn-sm capitalize'  wire:click.prevent='updateStock($id)'>$stock</span>";
            })
            ->add('closure', function ($product) {
                $closure = $product->closure;
                return "<span class='text-green-500 capitalize btn btn-sm'>$closure</span>";
            })
            ->add('sole', function ($product) {
                $sole = $product->sole;
                return "<span class='text-green-500 capitalize btn btn-sm'>$sole</span>";
            })
            ->add('detail')
            ->add('description')
            ->add('status', function ($product) {
                $status = $product->status;
                $id = $product->id;
                return "<span class='".($status == 'active' ? 'text-green-500' : 'text-red-500')." btn btn-sm capitalize'  wire:click.prevent='updateStatus($id)'>$status</span>";
            })
            ->add('gallery', function ($model) {
                $images = $model->gallery;
                if (is_string($images)) {
                    $images = explode(',', $images);
                }
                if (!empty($images)) {
                    $html ="<div class='flex flex-row gap-2'>";
                    foreach ($images as $image) {
                        $image = asset($image);
                        $html .="<div class='avatar'>
                <div class='w-12 rounded-full'>";
                        $html .= "<img src='$image' alt='Product Image' />";
                        $html .="</div></div>";

                    }
                    $html .="</div>";
                    return $html;
                } else {

                    return '';
                }
            })

            ->add('created_at_formatted', fn (Product $model) => Carbon::parse($model->created_at)->isoFormat('MMM Do YYYY'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('vendor','vendor')
            ->hidden(isHidden: true, isForceHidden: false),

            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
                Column::make('SubCategory', 'sub_category'),
            Column::make('Slug', 'slug')
                ->sortable()
                ->searchable()
                ->hidden(isHidden: true, isForceHidden: false),

            Column::make('Price', 'price')
                ->sortable()
                ->searchable(),

            Column::make('Sale price', 'sale_price')
                ->sortable()
                ->searchable(),

            Column::make('Qty', 'qty'),
            Column::make('Sale qty', 'sale_qty'),
            Column::make('Sku', 'sku')
                ->sortable()
                ->searchable()
                ->hidden(isHidden: true, isForceHidden: false),

            Column::make('Stock', 'stock')
                ->sortable()
                ->searchable(),

            Column::make('Closure', 'closure')
                ->sortable()
                ->searchable(),

            Column::make('Sole', 'sole')
                ->sortable()
                ->searchable(),

            Column::make('Detail', 'detail')
                ->sortable()
                ->searchable()
                ->hidden(isHidden: true, isForceHidden: false),

            Column::make('Description', 'description')
                ->sortable()
                ->searchable()
                ->hidden(isHidden: true, isForceHidden: false),

            Column::make('Status', 'status')
                ->sortable()
                ->searchable(),
            Column::make('Gallery','gallery')
            ->hidden(isHidden: true, isForceHidden: false),
            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable()
                ->hidden(isHidden: true, isForceHidden: false),

            Column::action('Action'),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datetimepicker('created_at'),
        ];
    }

    #[\Livewire\Attributes\On('detProduct')]
    public function detProduct($rowId): void
    {
        redirect()->route('detailProduct',['id'=>$rowId]);
    }
    #[\Livewire\Attributes\On('editProduct')]
    public function editProduct($rowId): void
    {
        redirect()->route('editProduct',['id'=>$rowId]);
    }
    #[\Livewire\Attributes\On('updateStock')]
    public function updateStock($id): void
    {
        try{
            $prod = Product::find($id);
            $prod->stock = $prod->stock == 'in'? 'out':'in';
            $prod->save();
            $this->success('Stock Status Updated');

        }catch(\Exception $e){
            (new ErrorLogHelper)('Updating Product Stock Status',$e->getMessage());
            $this->error('Please Check error Logs');
        }
    }
    #[\Livewire\Attributes\On('updateStatus')]
    public function updateStatus($id): void
    {
        try{
            $prod = Product::find($id);
            $prod->status = $prod->status == 'active'? 'inactive':'active';
            $prod->save();
            $this->success('Status Updated');

        }catch(\Exception $e){
            (new ErrorLogHelper)('Updating Product status Status',$e->getMessage());
            $this->error('Please Check error Logs');
        }
    }
    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId):void{
        try{
            $product = Product::find($rowId);
            $product->delete();
            $this->success('deleted successfully');
        }catch(\Exception $e){
            (new ErrorLogHelper)('Delete Product',$e->getMessage());
            $this->error('Please check error logs');
        }
    }

    public function actions(Product $row): array
    {
        return [
            Button::add('detProduct')
                ->slot('Detail')
                ->id()
                ->class('text-green-600 btn btn-sm')
                ->dispatch('detProduct', ['rowId' => $row->id])->can('view',Product::class),
                Button::add('editProduct')
                ->slot('Edit')
                ->id()
                ->class('text-primary btn btn-sm')
                ->dispatch('editProduct', ['rowId' => $row->id])->can('update',Product::class),
                Button::add('delete')
                ->slot('Delete')
                ->id()
                ->class('text-red-800 btn btn-sm')
                ->dispatch('delete', ['rowId' => $row->id])
                ->confirm('Are You sure you want to delete this product')
                ->can('delete',Product::class),
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
