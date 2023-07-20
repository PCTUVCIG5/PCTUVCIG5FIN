<?php

namespace App\Repositories;

use App\Models\Pharmacie;
use App\Repositories\BaseRepository;

/**
 * Class PharmacieRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class PharmacieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'image1',
        'image2',
        'image3',
        'typePhar',
        'statutPhar',
        'gardePhar'
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
        return Pharmacie::class;
    }
}
