<?php

namespace App\Repositories;

use App\Models\Homme;
use App\Repositories\BaseRepository;

/**
 * Class HommeRepository
 * @package App\Repositories
 * @version July 29, 2023, 4:33 pm UTC
*/

class HommeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomHomm',
        'prenHomm',
        'dateNHomm',
        'lieuNHomm',
        'sexeHomm',
        'telHomm',
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
        return Homme::class;
    }
}
