<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Femme
 * @package App\Models
 * @version July 29, 2023, 4:53 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $divoces
 * @property \Illuminate\Database\Eloquent\Collection $mariages
 * @property \Illuminate\Database\Eloquent\Collection $naissances
 * @property string $nomFemm
 * @property string $prenFemm
 * @property string $dateNFemm
 * @property string $lieuNFemm
 * @property string $sexeFemm
 * @property string $telFemm
 * @property string $image
 */
class Femme extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'femmes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomFemm',
        'prenFemm',
        'dateNFemm',
        'lieuNFemm',
        'sexeFemm',
        'telFemm',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomFemm' => 'string',
        'prenFemm' => 'string',
        'dateNFemm' => 'date',
        'lieuNFemm' => 'string',
        'sexeFemm' => 'string',
        'telFemm' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomFemm' => 'required|string|max:191',
        'prenFemm' => 'required|string|max:191',
        'dateNFemm' => 'required',
        'lieuNFemm' => 'required|string|max:191',
        'sexeFemm' => 'required|string|max:191',
        'telFemm' => 'required|string|max:191',
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
        return $this->hasMany(\App\Models\Divoce::class, 'femme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mariages()
    {
        return $this->hasMany(\App\Models\Mariage::class, 'femme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function naissances()
    {
        return $this->hasMany(\App\Models\Naissance::class, 'femme_id');
    }
}
