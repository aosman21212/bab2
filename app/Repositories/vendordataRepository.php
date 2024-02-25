<?php

namespace App\Repositories;

use App\Models\vendordata;
use App\Repositories\BaseRepository;

/**
 * Class vendordataRepository
 * @package App\Repositories
 * @version February 2, 2024, 1:44 pm UTC
*/

class vendordataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productServiceId',
        'invoiceNo',
        'invoiceAmount',
        'invoiceMonth',
        'invoiceYear',
        'invoiceDate',
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
        return vendordata::class;
    }
}
