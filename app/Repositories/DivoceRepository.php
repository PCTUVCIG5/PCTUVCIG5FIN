<?php

namespace App\Repositories;

use App\Models\Divoce;
use App\Repositories\BaseRepository;

/**
 * Class DivoceRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:39 pm UTC
*/

class DivoceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'divoces_date',
        'divoces_lieu',
        'homme_id',
        'femme_id'
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
        return Divoce::class;
    }
}
