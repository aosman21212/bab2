<?php

namespace App\Repositories;

use App\Models\babacctmanagers;
use App\Repositories\BaseRepository;

/**
 * Class babacctmanagersRepository
 * @package App\Repositories
 * @version February 1, 2024, 8:01 pm UTC
*/

class babacctmanagersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'AcctManagerName',
        'AcctManagerContact',
        'AcctManagerEmail',
        'AcctManagerStatus',
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
        return babacctmanagers::class;
    }
}
