<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Metier
 * @package App\Models
 * @version July 16, 2023, 5:38 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $refMetiers
 * @property string $nomMtie
 * @property string $typeMtie
 * @property string $statutMtie
 */
class Metier extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'metiers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomMtie',
        'typeMtie',
        'statutMtie'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomMtie' => 'string',
        'typeMtie' => 'string',
        'statutMtie' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomMtie' => 'required|string|max:191',
        'typeMtie' => 'required|string|max:191',
        'statutMtie' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function refMetiers()
    {
        return $this->hasMany(\App\Models\RefMetier::class, 'metier_id');
    }
}
