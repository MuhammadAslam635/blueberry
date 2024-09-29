<?php

namespace App\Livewire\Table;

use App\helper\ErrorLogHelper;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Mary\Traits\Toast;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class CategoryTable extends PowerGridComponent
{
    use WithExport;
    use Toast;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Category::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('logo',function($model) {

                $logo = asset('assets/img/category/'.$model->logo);

                return "<img class='w-8 rounded-full' src='$logo' />";
            })
            ->add('name')
            ->add('slug')

            ->add('status')
            ->add('created_at_formatted', fn (Category $model) => Carbon::parse($model->created_at)->isoFormat('MM Do YYYY h:m:s'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Logo', 'logo')
                ->sortable()
                ->searchable(),
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

    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId): void
    {
        try{
            $cat = Category::find($rowId);
        $cat->delete();
        $this->success('category Deleted');
        }catch(\Exception $e){
            (new ErrorLogHelper)('Delete Category',$e->getMessage());
            $this->error('Please Check Your Error Logs');
        }
    }

    public function actions(Category $row): array
    {
        return [
            Button::add('edit')
                ->slot('<x-mary-icon name="o-pencil-square" class="text-primary" />')
                ->route('updateCategory', ['id' => $row->id])->can('update',Category::class)
                ->tooltip('Edit Category'),
                Button::add('delete')
                ->slot('<x-mary-icon name="o-trash" class="text-red-700" />')
                ->id()
                ->confirm('Are you sure you want to Delete?')
                ->dispatch('delete', ['rowId' => $row->id])
                ->can('delete',Category::class)
                ->tooltip('Delete Category'),
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
