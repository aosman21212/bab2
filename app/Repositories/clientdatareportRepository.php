<?php

namespace App\Repositories;

use App\Models\clientdatareport;
use App\Repositories\BaseRepository;

/**
 * Class clientdatareportRepository
 * @package App\Repositories
 * @version February 20, 2024, 2:56 pm UTC
*/

class clientdatareportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productServiceId',
        'clientId',
        'month',
        'year',
        'quantity',
        'additionalQuantity',
        'additionalCost',
        'totalMonthlyDue',
        'outstandingBalance',
        'totalDue',
        'addedBy'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clientdatareport::class;
    }
}
