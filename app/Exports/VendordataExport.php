<?php

namespace App\Exports;

use App\Models\Vendordata;
use Carbon\Carbon; // Import Carbon library for date formatting
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VendordataExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Vendordata::all()->map(function ($data) {
            return [
                'ID' => $data->id,
                'Product Service' => $data->productserviceid->productServiceName,
                'Invoice No' => $data->invoiceNo,
                'Invoice Amount' => $data->invoiceAmount,
                'Invoice Month' => Carbon::createFromFormat('m', $data->invoiceMonth)->format('F'), // Format month name
                'Invoice Year' => $data->invoiceYear,
                'Invoice Date' => $data->invoiceDate,
                'Added By' => $data->addedby->name ?? '',
                'Created At' => Carbon::parse($data->created_at)->toDateString(), // Format created_at to date only
                'Updated At' => Carbon::parse($data->updated_at)->toDateString(), // Format updated_at to date only
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Client Services',
            'Invoice No',
            'Invoice Amount',
            'Invoice Month',
            'Invoice Year',
            'Invoice Date',
            'Added By',
            'Created At',
            'Updated At',
        ];
    }
}
