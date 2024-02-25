<?php

namespace App\Repositories;

use App\Models\clients;
use App\Repositories\BaseRepository;

/**
 * Class clientsRepository
 * @package App\Repositories
 * @version February 1, 2024, 7:39 pm UTC
*/

class clientsRepository extends BaseRepository
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
        'addedDate',
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
        return clients::class;
    }
}
