<?php

namespace App\Repositories;

use App\Models\Activite;
use App\Repositories\BaseRepository;

/**
 * Class ActiviteRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class ActiviteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomActi',
        'typeActi'
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
        return Activite::class;
    }
}
