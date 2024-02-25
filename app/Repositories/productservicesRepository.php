<?php

namespace App\Repositories;

use App\Models\productservices;
use App\Repositories\BaseRepository;

/**
 * Class productservicesRepository
 * @package App\Repositories
 * @version February 1, 2024, 9:11 pm UTC
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
        'addedDate',
        'clientId',
        'productServiceStatus',
        'vendorId'
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
