<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Homme
 * @package App\Models
 * @version July 29, 2023, 4:33 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $divoces
 * @property \Illuminate\Database\Eloquent\Collection $mariages
 * @property \Illuminate\Database\Eloquent\Collection $naissances
 * @property string $nomHomm
 * @property string $prenHomm
 * @property string $dateNHomm
 * @property string $lieuNHomm
 * @property string $sexeHomm
 * @property string $telHomm
 * @property string $image
 */
class Homme extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'hommes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomHomm',
        'prenHomm',
        'dateNHomm',
        'lieuNHomm',
        'sexeHomm',
        'telHomm',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomHomm' => 'string',
        'prenHomm' => 'string',
        'dateNHomm' => 'date',
        'lieuNHomm' => 'string',
        'sexeHomm' => 'string',
        'telHomm' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomHomm' => 'required|string|max:191',
        'prenHomm' => 'required|string|max:191',
        'dateNHomm' => 'required',
        'lieuNHomm' => 'required|string|max:191',
        'sexeHomm' => 'required|string|max:191',
        'telHomm' => 'required|string|max:191',
        'image' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function divoces()
    {
        return $this->hasMany(\App\Models\Divoce::class, 'homme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mariages()
    {
        return $this->hasMany(\App\Models\Mariage::class, 'homme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function naissances()
    {
        return $this->hasMany(\App\Models\Naissance::class, 'homme_id');
    }
}
