<?php

namespace App\Livewire\table;

use App\helper\ErrorLogHelper;
use App\Models\Tag;
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

final class TagTable extends PowerGridComponent
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
        return Tag::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('slug')
            ->add('status',function($model){
                $status = $model->status;
                $id = $model->id;
                return "<span class='" . ($status == "active" ? "text-green-500" : "text-red-500") . " p-1 btn btn-sm btn-primary hover:btn-warning border-none capitalize'  wire:click.prevent='updateStatus($id)'>$status</span>";
            })
            ->add('created_at_formatted', fn (Tag $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
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
    #[\Livewire\Attributes\on('updateStatus')]
    public function updateStatus($id){
      try{
        $tag = Tag::find($id);

        $tag->status = $tag->status == 'active' ? 'inactive' : 'active';

        $tag->save();
        $id ='';

        $this->success('Status Updated');
      }catch(\Exception $e){
        $id ='';
        (new ErrorLogHelper)('Update Status',$e->getMessage());
        $this->error('Please Check Error logs');
      }
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(Tag $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: '.$row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id])
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
