<?php

namespace App\Repositories;

use App\Models\vendors;
use App\Repositories\BaseRepository;

/**
 * Class vendorsRepository
 * @package App\Repositories
 * @version February 1, 2024, 6:07 pm UTC
*/

class vendorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vendorName',
        'vendorLogo',
        'addedBy',
        'vendorStatus'
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
        return vendors::class;
    }
}
