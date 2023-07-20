<?php

namespace App\Repositories;

use App\Models\CentreSante;
use App\Repositories\BaseRepository;

/**
 * Class CentreSanteRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:38 pm UTC
*/

class CentreSanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'image1',
        'image2',
        'image3',
        'typeCent',
        'statutCent'
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
        return CentreSante::class;
    }
}
