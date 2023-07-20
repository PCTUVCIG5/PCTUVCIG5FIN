<?php

namespace App\Repositories;

use App\Models\DemandeEmploi;
use App\Repositories\BaseRepository;

/**
 * Class DemandeEmploiRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:35 pm UTC
*/

class DemandeEmploiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descriptionDman',
        'cvDman',
        'dateDman',
        'statutDman',
        'habitant_id',
        'offre_emploi_id'
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
        return DemandeEmploi::class;
    }
}
