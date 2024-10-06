<?php

namespace App\Livewire\table;

use App\helper\ErrorLogHelper;
use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Mary\Traits\Toast;

final class OrderTable extends PowerGridComponent
{
    use Toast;
    public string $tableName = 'order-table-fxojpl-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::exportable(fileName: 'my-export-file')
            ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
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
        return Order::query();
    }

    public function relationSearch(): array
    {
        return [

        ];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('user',function(Order $order){
                $user = $order->user->name;
               // dump($user);
                return "<span>".$user."</span>";
            })
            ->add('status')
            ->add('total')
            ->add('subtotal')
            ->add('payment_mode',function(Order $order){
                $mode = $order->transaction->payment_mode ?? 'N/A';
                return "<span class='".($mode == 'jazzcash' ? 'text-accent' : ($mode == 'cod' ? 'text-secondary': ($mode =='online'?'text-primary':($mode =='card'?'text-green-600':'text-red-600'))))." btn btn-sm capitalize' >$mode</span>";
            })
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
            Column::make('User', 'user'),
            Column::make('Status', 'status')
                ->sortable()
                ->searchable(),
            Column::make('Total', 'total')
                ->sortable()
                ->searchable(),

            Column::make('Subtotal', 'subtotal')
                ->sortable()
                ->searchable(),

            Column::make('Payment Method', 'payment_mode')
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

            Column::make('Cancel Date', 'cancel_date_formatted', 'cancel_date')
                ->sortable()
                ->hidden(true,false),

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
    #[\Livewire\Attributes\On('detail')]
    public function detail($rowId): void
    {
        redirect()->route('orderDetail',['id'=>$rowId]);
    }

    public function actions(Order $row): array
    {
        return [
            Button::add('detail')
                ->slot('Detail')
                ->id()
                ->class('btn btn-sm text-secondary')
                ->dispatch('detail', ['rowId' => $row->id]),
            Button::add('edit')
                ->slot('Edit')
                ->id()
                ->class('btn btn-sm text-primary')
                ->dispatch('edit', ['rowId' => $row->id]),
            Button::add('edit')
                ->slot('Delete')
                ->id()
                ->class('btn btn-sm text-accent')
                ->dispatch('edit', ['rowId' => $row->id]),
        ];
    }
    public function actionsFromView($row): View
    {
        return view('actions-view', ['row' => $row]);
    }
    #[On('updateStatus')]
    public function updateStatus($rowId,$status):void{
           try{
               $order = Order::find($rowId);
               $order->status = $status;
               $order->save();
               $this->success('Order Status Updated');
           }catch(\Exception $e){
            (new ErrorLogHelper)('Updating Order Status',$e->getMessage());
            $this->error('Please check your error log');
           }
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
