<?php

namespace App\Repositories;

use App\Models\Habitant;
use App\Repositories\BaseRepository;

/**
 * Class HabitantRepository
 * @package App\Repositories
 * @version July 17, 2023, 5:29 pm UTC
*/

class HabitantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomHabi',
        'prenHabi',
        'dateNHabi',
        'lieuNHabi',
        'sexeHabi',
        'telHabi',
        'image'
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
        return Habitant::class;
    }
}
