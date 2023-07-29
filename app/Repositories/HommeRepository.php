<?php

namespace App\Repositories;

use App\Models\Homme;
use App\Repositories\BaseRepository;

/**
 * Class HommeRepository
 * @package App\Repositories
 * @version July 29, 2023, 3:39 pm UTC
*/

class HommeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idHom',
        'habitant_id'
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
        return Homme::class;
    }
}
