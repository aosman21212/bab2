<?php

namespace App\Repositories;

use App\Models\productservices;
use App\Repositories\BaseRepository;

/**
 * Class productservicesRepository
 * @package App\Repositories
 * @version February 28, 2024, 6:21 pm UTC
*/

class productservicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productServiceName',
        'initiatedQuantity',
        'recurringFees',
        'additionalFees',
        'recurringPeriod',
        'addedBy',
        'clientId',
        'productServiceStatus',
        'vendorId',
        'ServiceTypeId'
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
