<?php

namespace App\Repositories;

use App\Models\OffreEmploi;
use App\Repositories\BaseRepository;

/**
 * Class OffreEmploiRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:39 pm UTC
*/

class OffreEmploiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descriptionOfr',
        'dateDebutOfr',
        'dateFinOfr',
        'entrepriseOfr',
        'statutOfr'
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
        return OffreEmploi::class;
    }
}
