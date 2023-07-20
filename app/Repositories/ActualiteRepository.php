<?php

namespace App\Repositories;

use App\Models\Actualite;
use App\Repositories\BaseRepository;

/**
 * Class ActualiteRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:37 pm UTC
*/

class ActualiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'image1',
        'image2',
        'image3',
        'typeActu',
        'statutActu'
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
        return Actualite::class;
    }
}
