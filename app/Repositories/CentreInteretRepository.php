<?php

namespace App\Repositories;

use App\Models\CentreInteret;
use App\Repositories\BaseRepository;

/**
 * Class CentreInteretRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class CentreInteretRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idHom',
        'typeCeIn',
        'habitant_id'
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
        return CentreInteret::class;
    }
}
