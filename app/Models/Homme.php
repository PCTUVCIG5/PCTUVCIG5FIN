<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Homme
 * @package App\Models
 * @version July 29, 2023, 3:39 pm UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property \Illuminate\Database\Eloquent\Collection $divoces
 * @property \Illuminate\Database\Eloquent\Collection $mariages
 * @property \Illuminate\Database\Eloquent\Collection $naissances
 * @property string $idHom
 * @property integer $habitant_id
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
        'idHom',
        'habitant_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idHom' => 'string',
        'habitant_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idHom' => 'required|string|max:191',
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
