<?php

namespace App\Repositories;

use App\Models\Mariage;
use App\Repositories\BaseRepository;

/**
 * Class MariageRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class MariageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mariage_date',
        'mariage_lieu',
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
        return Mariage::class;
    }
}
