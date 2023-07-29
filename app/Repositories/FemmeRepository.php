<?php

namespace App\Repositories;

use App\Models\Femme;
use App\Repositories\BaseRepository;

/**
 * Class FemmeRepository
 * @package App\Repositories
 * @version July 29, 2023, 4:53 pm UTC
*/

class FemmeRepository extends BaseRepository
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
        return Femme::class;
    }
}
