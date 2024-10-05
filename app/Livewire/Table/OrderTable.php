<?php

namespace App\Livewire\table;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class OrderTable extends PowerGridComponent
{
    public string $tableName = 'order-table-fxojpl-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Order::query()->with(['user','orderItems','transaction']);
    }

    public function relationSearch(): array
    {
        return [
            'user'=>[
                'name'
            ]
        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('user_id',fn(Order $order)=>e($order->user->name ?? 'N/A'))
            ->add('status', function ($order) {
                $status = $order->status;

                return "<span class='".($status == 'pending' ? 'text-accent' : ($status == 'process' ? 'text-secondary': ($status =='dispatch'?'text-primary':($status =='delivered'?'text-green-600':'text-red-600'))))." btn btn-sm capitalize' >$status</span>";
            })
            ->add('total')
            ->add('subtotal')
            ->add('tax')
            ->add('discount')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('cancel_date_formatted', fn (Order $model) => Carbon::parse($model->cancel_date)->isoFormat('M-dd-Y'))
            ->add('created_at_formatted', fn (Order $model) => Carbon::parse($model->created_at)->isoFormat('M-dd-Y h:m:s'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('User', 'user_id'),
            Column::make('Status', 'status')
                ->sortable()
                ->searchable(),
            Column::make('Total', 'total')
                ->sortable()
                ->searchable(),

            Column::make('Subtotal', 'subtotal')
                ->sortable()
                ->searchable(),

            Column::make('Tax', 'tax')
                ->sortable()
                ->searchable(),

            Column::make('Discount', 'discount')
                ->sortable()
                ->searchable(),

            Column::make('Address', 'address')
                ->sortable()
                ->searchable()->hidden(true,false)
                ,

            Column::make('City', 'city')
                ->sortable()
                ->searchable(),

            Column::make('State', 'state')
                ->sortable()
                ->searchable(),



            Column::make('Cancel date', 'cancel_date_formatted', 'cancel_date')
                ->sortable(),

            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datepicker('cancel_date'),
            Filter::datetimepicker('created_at'),
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(Order $row): array
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
