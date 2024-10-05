<?php

namespace App\Livewire\Admin\Products;

use App\helper\ErrorLogHelper;
use App\Models\Product;
use App\Models\ProductDimension;
use App\Models\ProductTag;
use App\Models\ProductWeight;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Policies\SystemPolicy;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

class CreateProductComponent extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use Toast;

    #[Layout('layouts.dashboard-layout')]
    public Product $product;

    public $vendor_id = '';

    #[Validate('required|int')]
    public $sub_category_id = '';

    #[Validate('required|strig')]
    public $name = '';

    #[Validate('required|strig|unique,products,slug')]
    public $slug = '';

    #[Validate('required|numeric')]
    public $price = '';

    public $sale_price = '';

    #[Validate('required|numeric')]
    public $qty = '';

    public $sale_qty = '';

    public $sku = '';

    #[Validate('required|in:in,out')]
    public $stock = '';

    public $closure = '';

    public $sole = '';

    public $detail = '';

    public $description = '';

    #[Validate('required|in:active,inactive')]
    public $status = '';

    public $gallery;

    public $image;

    public $productWeights = [];

    public $productDimensions = [];

    public $productTags = [];

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
            'image' => $this->product->image,
        ]);
    }

    protected function getFormSchema(): array
    {
        $systemType = (new SystemPolicy)->type();
        //dd($systemType);
        $formSchema = [
            Section::make()
                ->columns([
                    'sm' => 3,
                    'xl' => 6,
                    '2xl' => 8,
                ])
                ->schema([
                    Fieldset::make('Product Title & Slug')
                        ->schema([
                            Forms\Components\TextInput::make('name')->required()
                                ->live(true)
                                ->afterStateUpdated(fn (string $state, Set $set) => $set('slug', Str::slug($state, '-'))),
                            Forms\Components\TextInput::make('slug')
                                ->placeholder('Auto Generated and should be unqiue')
                                ->required()
                                ->readOnly(),
                        ]),
                    Fieldset::make('Product SubCategory')
                        ->schema([
                            Select::make('sub_category_id')
                                ->label('SubCategory')
                                ->options(SubCategory::where('status', 'active')->pluck('name', 'id'))
                                ->searchable()
                                ->required(),
                        ])->columns(1),
                    Fieldset::make('Product Price, discount and Qty')
                        ->schema([
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
                        ])->columns(3),
                    Fieldset::make('Product Status, SKU & Stock Info')
                        ->schema([
                            TextInput::make('sku')
                                ->required(),
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
                        ])->columns(3),
                    Fieldset::make('PRoduct Sole & Closure')
                        ->schema([
                            TextInput::make('closure')
                                ->required(),
                            TextInput::make('sole')
                                ->nullable(),
                        ])->columns(2),
                    Fieldset::make('Product Price, discount and Qty')
                        ->schema([
                            Repeater::make('productWeights')
                                ->relationship()
                                ->schema([
                                    TextInput::make('weight')
                                        ->numeric()
                                        ->required()
                                        ->default(50),
                                    Select::make('type')
                                        ->options([
                                            'g' => 'Gram',
                                            'kg' => 'Kilo Gram',
                                        ])
                                        ->required(),
                                ])->defaultItems(3),
                        ])->columns(1),
                    Fieldset::make('Product Size Detail')
                        ->schema([
                            Repeater::make('productDimensions')
                                ->relationship()
                                ->schema([
                            Select::make('width')
                                ->multiple()
                                ->searchable()
                                ->options([
                                    'sm' => 'Small',
                                    'md' => 'Medium',
                                    'xl' => 'Large',
                                    'xxl' => 'Extra Large',
                                ])
                                ->required(),
                                ]),
                                Repeater::make('productTags')
                                ->relationship()
                                ->schema([
                            Select::make('tag_id')
                                ->label('Tag')
                                ->multiple()
                                ->searchable()
                                ->options(Tag::where('status', 'active')->pluck('name', 'id'))
                                ->required(),
                                ]),
                        ])->columns(2),
                    Fieldset::make('Product Description')
                        ->schema([
                            MarkdownEditor::make('detail')
                                ->required(),
                            MarkdownEditor::make('description')
                                ->nullable(),

                        ])->columns(2),
                    Fieldset::make('Product Image and Gallery')
                        ->schema([
                            FileUpload::make('image')
                                ->disk('public')
                                ->directory('assets/img/product')
                                ->image()
                                ->imagePreviewHeight('250')
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ]),
                            FileUpload::make('gallery')
                                ->disk('public')
                                ->imagePreviewHeight('250')
                                ->multiple()
                                ->directory('assets/img/product/gallery')
                                ->image()
                                ->imageEditor()
                                ->panelLayout('grid')
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ]),
                        ])->columns(2),

                ]), ];
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

        try {
            $prod = Product::create($this->form->getState());
            // Save the product weights
            foreach ($this->productWeights as $weight) {
                ProductWeight::create([
                    'product_id' => $prod->id,
                    'weight' => $weight['weight'],
                    'type' => $weight['type'],
                ]);
            }
            foreach ($this->productDimensions as $dimen) {
                foreach (($demin['width'] ?? []) as $width) {
                    ProductDimension::create([
                        'product_id' => $prod->id,
                        'width' => $width,
                    ]);
                }
            }
            foreach ($this->productTags as $tag) {
                foreach (($tag['tag_id'] ?? []) as $tagId) {
                    ProductTag::create([
                        'product_id' => $prod->id,
                        'tag_id' => $tagId,
                    ]);
                }
            }
            $this->dispatch('pg:eventRefresh-ProductTable');
            $this->success('Product created');
            $this->resetProduct();
        } catch (\Exception $e) {
            (new ErrorLogHelper)('creating Product', $e->getMessage());
            $this->error('Please Check error logs');
        }
    }
    public function resetProduct()
    {
        $properties = [
            'vendor_id',
            'sub_category_id',
            'name',
            'slug',
            'price',
            'sale_price',
            'qty',
            'sale_qty',
            'sku',
            'stock',
            'closure',
            'sole',
            'detail',
            'description',
            'status',
            'gallery',
            'image',
            'productWeights',
            'productDimensions',
            'productTags',
        ];

        foreach ($properties as $property) {
            $this->$property = in_array($property, ['gallery', 'image']) ? null : '';
        }

        $this->productWeights = [];
        $this->productDimensions = [];
        $this->productTags = [];
    }
    public function render()
    {
        return view('livewire.admin.products.create-product-component');
    }
}
