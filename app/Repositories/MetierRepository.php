<?php

namespace App\Repositories;

use App\Models\Metier;
use App\Repositories\BaseRepository;

/**
 * Class MetierRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class MetierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomMtie',
        'typeMtie',
        'statutMtie'
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
        return Metier::class;
    }
}
