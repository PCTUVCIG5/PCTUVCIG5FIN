<?php

namespace App\Repositories;

use App\Models\RefMetier;
use App\Repositories\BaseRepository;

/**
 * Class RefMetierRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class RefMetierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'metier_id',
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
        return RefMetier::class;
    }
}
