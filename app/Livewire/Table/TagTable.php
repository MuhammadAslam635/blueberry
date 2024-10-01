<?php

namespace App\Livewire\table;

use App\helper\ErrorLogHelper;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Mary\Traits\Toast;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;

use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;

use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use PowerComponents\LivewirePowerGrid\Exportable;
use Illuminate\Support\Str;


final class TagTable extends PowerGridComponent
{
    use Toast;
    use WithExport;

    public string $tableName = 'TagTable';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [

                PowerGrid::header()
                ->showSearchInput()
            ->showToggleColumns(),
            PowerGrid::footer()
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
            ->add('status', function ($model) {
                $status = $model->status;
                $id = $model->id;

                return "<span class='".($status == 'active' ? 'text-green-500' : 'text-red-500')." p-1 btn btn-sm btn-primary hover:btn-warning border-none capitalize'  wire:click.prevent='updateStatus($id)'>$status</span>";
            })
            ->add('created_at_formatted', fn (Tag $model) => Carbon::parse($model->created_at)->format('M-d-Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::add()
                ->title('Name')
                ->field('name')

            ->editOnClick()
                ->sortable()
                ->searchable()
                ->fixedOnResponsive(),

            Column::make('Slug', 'slug')
                ->sortable()
                ->searchable()
               ,

            Column::make('Status', 'status')
                ->sortable()
                ->searchable()
               ,

            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable()
                ->hidden(isHidden: true, isForceHidden: false),

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
    public function updateStatus($id)
    {
        try {
            $tag = Tag::find($id);

            $tag->status = $tag->status == 'active' ? 'inactive' : 'active';

            $tag->save();
            $id = '';

            $this->success('Status Updated');
        } catch (\Exception $e) {
            $id = '';
            (new ErrorLogHelper)('Update Status', $e->getMessage());
            $this->error('Please Check Error logs');
        }
    }

    public function onUpdatedEditable(string|int $id, string $field, string $value): void
    {

        if($field == 'name'){
            $slug = Str::slug($value,'-');
            Tag::query()->find($id)->update([
                $field => e($value),
                'slug'=>$slug
            ]);
            $this->success('Tag Updated');
        }else{
            Tag::query()->find($id)->update([
                $field => e($value),
            ]);
            $this->success('Tag Updated');
        }

    }


    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId)
    {
        try {
            $cat = Tag::findOrFail($rowId);
            $cat->delete();
            $this->dispatch('pg:eventRefresh-TagTable');
            $this->success('Tag Deleted');
        } catch (\Exception $e) {
            $cat = Tag::find($rowId);
            if($cat){
                (new ErrorLogHelper)('Delete tag', $e->getMessage());
                $this->error('Please Check Your Error Logs');
            }else{
                $this->success('Tag Deleted');
            }

        }
    }

    public function actions(Tag $row): array
    {
        return [

            Button::add('delete')
                ->slot('Delete')
                ->id()
                ->class('text-red-800 btn btn-sm')
                ->dispatch('delete',['rowId'=>$row->id])
                ->can('delete', Tag::class)
                ->tooltip('Delete Tag'),

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
