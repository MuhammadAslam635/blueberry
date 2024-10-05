<?php

namespace App\Livewire\Table;

use App\helper\ErrorLogHelper;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Mary\Traits\Toast;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class UserTable extends PowerGridComponent
{
    use WithExport;
    use Toast;
    public string $tableName = 'UserTable';
    protected $listeners = ['refreshComponent'=>'pg:eventRefresh-UserTable'];

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
        return User::query();
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
            ->add('email')
            ->add('utype',function(User $model){
                $type = $model->utype == 'adm' ? 'Admin' : ($model->utype == 'sup' ? 'SuperAdmin' : ($model->utype == 'ven' ? 'Vendor' : ($model->utype == 'blo' ? 'Blogger' : 'User ')));
                return '<span class="btn btn-sm">'.$type.'</span>';
            })
            ->add('created_at_formatted', fn (User $model) => Carbon::parse($model->created_at)->isoFormat('M-dd-Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),

            Column::make('Utype', 'utype')
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
            Filter::inputText('name')->placeholder('User Name...'),
            Filter::inputText('email')->placeholder('Email...'),
            Filter::datetimepicker('created_at'),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        redirect()->route('updateUser',['id'=>$rowId]);
    }
    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId):void{
        try{
            $user = User::find($rowId);
            $user->delete();
            $this->success('deleted successfully');
        }catch(\Exception $e){
            (new ErrorLogHelper)('Delete User',$e->getMessage());
            $this->error('Please check error logs');
        }
    }
    public function actions(User $row): array
    {
        return [
            Button::add('Profile')
            ->slot('profile')
            ->id()
            ->class('btn btn-sm text-primary')
            ->dispatch('edit',['rowId'=>$row->id]),
            Button::add('edit')
                ->slot('Edit')
                ->id()
                ->class('btn btn-sm text-primary')
                ->dispatch('edit', ['rowId' => $row->id]),
                Button::add('Delete')
            ->slot('delete')
            ->id()
            ->class('btn btn-sm text-red-600')
            ->dispatch('delete',['rowId'=>$row->id])->can('delete',User::class),

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
