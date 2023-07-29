<?php

namespace App\Repositories;

use App\Models\Naissance;
use App\Repositories\BaseRepository;

/**
 * Class NaissanceRepository
 * @package App\Repositories
 * @version July 29, 2023, 12:06 pm UTC
*/

class NaissanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_nais',
        'prenoms_nais',
        'dateNaissance_nais',
        'lieuNaissance_nais',
        'mode_nais',
        'lieuHabitation_nais',
        'statutChef',
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
        return Naissance::class;
    }
}
