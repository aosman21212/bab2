<?php

namespace App\Repositories;

use App\Models\ServiceType;
use App\Repositories\BaseRepository;

/**
 * Class ServiceTypeRepository
 * @package App\Repositories
 * @version February 28, 2024, 1:24 pm UTC
*/

class ServiceTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TypeName'
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
        return ServiceType::class;
    }
}
