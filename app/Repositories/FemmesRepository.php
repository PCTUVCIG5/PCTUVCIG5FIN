<?php

namespace App\Repositories;

use App\Models\Femmes;
use App\Repositories\BaseRepository;

/**
 * Class FemmesRepository
 * @package App\Repositories
 * @version July 29, 2023, 4:33 pm UTC
*/

class FemmesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomFemm',
        'prenFemm',
        'dateNFemm',
        'lieuNFemm',
        'sexeFemm',
        'telFemm',
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
        return Femmes::class;
    }
}
