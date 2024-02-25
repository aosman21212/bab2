<?php

namespace App\Repositories;

use App\Models\clientdata;
use App\Repositories\BaseRepository;

/**
 * Class clientdataRepository
 * @package App\Repositories
 * @version February 2, 2024, 3:54 pm UTC
*/

class clientdataRepository extends BaseRepository
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
        'addedBy',
        'updatedBy'
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
        return clientdata::class;
    }
}
