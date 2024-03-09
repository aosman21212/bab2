<?php

namespace App\Repositories;

use App\Models\productservices;
use App\Repositories\BaseRepository;

/**
 * Class productservicesRepository
 * @package App\Repositories
 * @version March 9, 2024, 4:37 pm UTC
*/

class productservicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'initiatedQuantity',
        'recurringFees',
        'additionalFees',
        'recurringPeriod',
        'addedBy',
        'clientId',
        'productServiceStatus',
        'vendorId',
        'ServiceTypeId',
        'productServiceName'
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
        return productservices::class;
    }
}
