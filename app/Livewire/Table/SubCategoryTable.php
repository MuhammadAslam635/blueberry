<?php

namespace App\Livewire\table;

use App\helper\ErrorLogHelper;
use App\Models\SubCategory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Mary\Traits\Toast;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;

final class SubCategoryTable extends PowerGridComponent
{
    use WithExport;
    use Toast;
    public string $tableName ="SubCategoryTable";

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

    public function datasource(): Builder
    {
        return SubCategory::query()->with('category');
    }

    public function relationSearch(): array
    {
        return [
            'category'=>[
                'name'
            ]
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('category',function($model){
                $name = $model->category->name;
               return "<span class='font-bold btn text-primary'>$name</spam>";
            })
            ->add('name')
            ->add('slug')
            ->add('status',function($model){
                $status = $model->status;
                $id = $model->id;
                return "<span wire:click.prevent='updateStatus($id)'  class='".($status == 'active' ? 'text-green-500' : 'text-red-500')." p-1 btn btn-sm btn-primary hover:btn-warning border-none capitalize'>$status</span>";
            })
            ->add('created_at_formatted', fn (SubCategory $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Category ', 'category')
            ->searchable()
            ->sortable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Slug', 'slug')
                ->sortable()
                ->searchable(),

            Column::make('Status', 'status')
                ->sortable()
                ->searchable(),

            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datetimepicker('created_at'),
        ];
    }
    #[\Livewire\Attributes\On('updateStatus')]
    public function updateStatus($id): void
    {
        try{
            $sub = SubCategory::find($id);
            $sub->status = $sub->status == 'active' ? 'inactive': 'active';
            $sub->save();
            $this->success('Status Updated');
        }catch(\Exception $e){
            (new ErrorLogHelper)('Status Updated',$e->getMessage());
            $this->error('Please Check error logs');
        }
    }
    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(SubCategory $row): array
    {
        return [
            Button::add('edit')
                ->slot('<x-mary-icon name="o-pencil-square"  class="text-indigo-700" />')
                ->route('updateSubCategory', ['id' => $row->id])
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
