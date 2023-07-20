<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Femme
 * @package App\Models
 * @version July 16, 2023, 5:39 pm UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property \Illuminate\Database\Eloquent\Collection $divoces
 * @property \Illuminate\Database\Eloquent\Collection $mariages
 * @property \Illuminate\Database\Eloquent\Collection $naissances
 * @property integer $habitant_id
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
        'habitant_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'habitant_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'habitant_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function habitant()
    {
        return $this->belongsTo(\App\Models\Habitant::class, 'habitant_id');
    }

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
