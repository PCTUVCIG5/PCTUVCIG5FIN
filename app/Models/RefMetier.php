<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RefMetier
 * @package App\Models
 * @version July 16, 2023, 5:38 pm UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property \App\Models\Metier $metier
 * @property integer $metier_id
 * @property integer $habitant_id
 */
class RefMetier extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ref_metiers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'metier_id',
        'habitant_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'metier_id' => 'integer',
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
        'metier_id' => 'required',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function metier()
    {
        return $this->belongsTo(\App\Models\Metier::class, 'metier_id');
    }
}
