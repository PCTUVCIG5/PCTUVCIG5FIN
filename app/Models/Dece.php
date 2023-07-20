<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dece
 * @package App\Models
 * @version July 16, 2023, 5:39 pm UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property string $deces_date
 * @property string $deces_cause
 * @property integer $habitant_id
 */
class Dece extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'deces';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'deces_date',
        'deces_cause',
        'habitant_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'deces_date' => 'date',
        'deces_cause' => 'string',
        'habitant_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'deces_date' => 'required',
        'deces_cause' => 'required|string|max:191',
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
}
