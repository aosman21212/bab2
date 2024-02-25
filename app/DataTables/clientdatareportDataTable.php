<?php

namespace App\DataTables;

use App\Models\ClientDataReport;
use Yajra\DataTables\Services\DataTable;

class ClientDataReportDataTable extends DataTable
{
    // Define the structure of the data table
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('clientName', function ($clientDataReport) {
                return $clientDataReport->clientid->clientName;
            })
            ->addColumn('productServiceName', function ($clientDataReport) {
                return $clientDataReport->productserviceid->productServiceName;
            });
    }

    // Define the initial query to retrieve data
    public function query(ClientDataReport $model)
    {
        return $model->newQuery();
    }

    // Define HTML structure and behavior
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'excel', 'className' => 'btn btn-success btn-sm no-corner', 'text' => '<i class="fas fa-file-excel"></i> Excel'],
                    ['extend' => 'reload', 'className' => 'btn btn-secondary btn-sm no-corner', 'text' => '<i class="fas fa-sync"></i> Reload'],
                ],
            ]);
    }

    // Define column titles
    protected function getColumns()
    {
        return [
          
            'clientName' => ['title' => 'Name'],
            'productServiceName' => ['title' => 'Product'],
       
            'quantity',
            'additionalQuantity',
            'additionalCost',
            'totalMonthlyDue',
            'outstandingBalance',
            'totalDue',
            'year',

        ];
    }

    // Define the filename for exporting data
    protected function filename()
    {
        return 'clientdatareports_datatable_' . time();
    }
}
