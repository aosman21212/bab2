<?php
namespace App\Exports;

use App\Models\ClientDataReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon; // Import Carbon library for date formatting

class ClientDataReportsExport implements FromCollection, WithHeadings
{
    protected $searchCriteria;

    public function __construct($searchCriteria)
    {
        $this->searchCriteria = $searchCriteria;
    }

    public function collection()
    {
        // Apply search criteria to filter data
        $query = ClientDataReport::query();

        if (!empty($this->searchCriteria['clientId'])) {
            $query->where('clientId', $this->searchCriteria['clientId']);
        }
        // Add more conditions based on your search criteria

        // Get the data with related models to replace IDs with text values
        $clientDataReports = $query->with('clientid', 'productserviceid')->get();

        // Transform the data to include text values instead of IDs
        $clientDataReports->transform(function ($report) {
            return [
                'ID' => $report->id,
                'Product Service' => $report->productserviceid->productServiceName,
                'Client' => $report->clientid->clientName,
                'Month' => date('F', mktime(0, 0, 0, $report->month, 1)),
                'Year' => $report->year,
                'Quantity' => $report->quantity,
                'Additional Quantity' => $report->additionalQuantity,
                'Additional Cost' => $report->additionalCost,
                'Total Monthly Due' => $report->totalMonthlyDue,
                'Outstanding Balance' => $report->outstandingBalance,
                'Total Due' => $report->totalDue,
                'Added By' => $report->addedby->name, // Assuming 'name' is the attribute of the User model you want to display
                'Created At' => Carbon::parse($report->created_at)->format('Y-m-d'), // Format created_at
                'Updated At' => Carbon::parse($report->updated_at)->format('Y-m-d'), // Format updated_at
            ];
        });

        return $clientDataReports;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Client Services',
            'Client',
            'Month',
            'Year',
            'Quantity',
            'Additional Quantity',
            'Additional Cost',
            'Total Monthly Due',
            'Outstanding Balance',
            'Total Due',
            'Added By',
            'Created At', // Add Created At heading
            'Updated At', // Add Updated At heading
        ];
    }
}
