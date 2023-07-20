<?php

namespace App\Repositories;

use App\Models\Amenagement;
use App\Repositories\BaseRepository;

/**
 * Class AmenagementRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:39 pm UTC
*/

class AmenagementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dateAme',
        'ancienQtier',
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
        return Amenagement::class;
    }
}
