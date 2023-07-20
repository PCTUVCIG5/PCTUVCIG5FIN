<?php

namespace App\Repositories;

use App\Models\Femme;
use App\Repositories\BaseRepository;

/**
 * Class FemmeRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:39 pm UTC
*/

class FemmeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Femme::class;
    }
}
