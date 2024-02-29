<?php

namespace App\Repositories;

use App\Models\clientssss;
use App\Repositories\BaseRepository;

/**
 * Class clientssssRepository
 * @package App\Repositories
 * @version February 28, 2024, 11:54 pm UTC
*/

class clientssssRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clientName',
        'clientLogo',
        'contactName',
        'mobileNo',
        'email',
        'babAcctManagerId',
        'orderDate',
        'startDate',
        'bill_to',
        'addedBy',
        'clientStatus'
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
        return clientssss::class;
    }
}
