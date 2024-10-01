<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use App\Models\SubCategory;
use App\Policies\SystemPolicy;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class CreateProductComponent extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use Toast;

    #[Layout('layouts.dashboard-layout')]
    public Product $product;

    public $vendor_id = '';

    public $sub_category_id = '';

    public $name = '';

    public $slug = '';

    public $price = '';

    public $sale_price = '';

    public $qty = '';

    public $sale_qty = '';

    public $sku = '';

    public $stock = '';

    public $closure = '';

    public $sole = '';

    public $detail = '';

    public $description = '';

    public $status = '';

    public $gallery;
    public $image;

    public function mount(): void
    {
        $this->product = new Product;
        $this->form->fill([
            'vendor_id' => $this->product->vendor_id,
            'sub_category_id' => $this->product->sub_category_id,
            'name' => $this->product->name,
            'slug' => $this->product->slug,
            'price' => $this->product->price,
            'sale_price' => $this->product->sale_price,
            'qty' => $this->product->qty,
            'sale_qty' => $this->product->sale_qty,
            'sku' => $this->product->sku,
            'stock' => $this->product->stock,
            'closure' => $this->product->closure,
            'sole' => $this->product->sole,
            'detail' => $this->product->detail,
            'description' => $this->product->description,
            'status' => $this->product->status,
            'gallery' => $this->product->gallery,
            'image'=>$this->product->image,
        ]);
    }

    protected function getFormSchema(): array
    {
        $systemType = (new SystemPolicy())->type();
        //dd($systemType);
        $formSchema= [
            Section::make('Product Info')
                ->schema([

                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\TextInput::make('slug')->required(),
                    Select::make('sub_category_id')
                        ->label('SubCategory')
                        ->options(SubCategory::where('status', 'active')->pluck('name'))
                        ->searchable()
                        ->required(),
                    TextInput::make('price')
                        ->prefix('usd')
                        ->numeric()
                        ->required(),
                    TextInput::make('sale_price')
                        ->prefix('usd')
                        ->numeric()
                        ->default(0.0)
                        ->required(),
                    TextInput::make('qty')
                        ->postfix('No')
                        ->numeric()
                        ->required()
                        ->default(0),
                    TextInput::make('sku')
                        ->required(),
                    TextInput::make('closure')
                        ->required(),
                    TextInput::make('sole')
                        ->nullable(),
                    Radio::make('stock')
                        ->options([
                            'in' => 'InStock',
                            'out' => 'OutOfStock',
                        ])
                        ->columns(2)
                        ->gridDirection('row'),
                    Radio::make('status')
                        ->options([
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ])
                        ->columns(2)
                        ->gridDirection('row'),

                ])->columns(2),
            Section::make('Product detail info')
                ->schema([
                    MarkdownEditor::make('detail')
                        ->required(),
                    MarkdownEditor::make('description')
                        ->nullable(),
                    FileUpload::make('image')
                        ->disk('public')
                        ->directory('assets/img/product')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),
                    FileUpload::make('gallery')
                        ->disk('public')
                        ->multiple()
                        ->directory('assets/img/product/gallery')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                            '4:3',
                            '1:1',
                        ]),
                ])->columns(2),
        ];
        if ($systemType === 'multi') {
            $formSchema[] = Forms\Components\TextInput::make('vendor_id')->value(Auth::user()->vendor_id);
        }
        return $formSchema;
    }

    protected function getFormModel(): Product
    {
        return $this->product;
    }

    public function create(): void
    {

        Product::create($this->form->getState());
    }

    public function render()
    {
        return view('livewire.admin.products.create-product-component');
    }
}
