<?php

namespace App\Repositories;

use App\Models\Demenagement;
use App\Repositories\BaseRepository;

/**
 * Class DemenagementRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:39 pm UTC
*/

class DemenagementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dateDme',
        'nouveauQtier',
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
        return Demenagement::class;
    }
}
