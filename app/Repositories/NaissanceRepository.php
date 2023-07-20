<?php

namespace App\Repositories;

use App\Models\Naissance;
use App\Repositories\BaseRepository;

/**
 * Class NaissanceRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class NaissanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'prefecture',
        'centretatcivil',
        'registre',
        'acte',
        'date_acte',
        'nom',
        'prenom',
        'delivre_a',
        'delivre_le',
        'delivre_an',
        'num_serie',
        'naissance_jour_moi',
        'naissance_an',
        'naissance_heure',
        'naissance_minuite',
        'naissance_nom_prenom',
        'naissance_lieu',
        'naissance_sexe',
        'declaration_faite_par',
        'declaration_recue_pa',
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
