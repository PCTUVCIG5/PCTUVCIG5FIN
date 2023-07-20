<?php

namespace App\Repositories;

use App\Models\Dece;
use App\Repositories\BaseRepository;

/**
 * Class DeceRepository
 * @package App\Repositories
 * @version July 16, 2023, 5:39 pm UTC
*/

class DeceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'deces_date',
        'deces_cause',
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
        return Dece::class;
    }
}
