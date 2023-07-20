<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Demenagement
 * @package App\Models
 * @version July 16, 2023, 5:39 pm UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property string $dateDme
 * @property string $nouveauQtier
 * @property integer $habitant_id
 */
class Demenagement extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'demenagements';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dateDme',
        'nouveauQtier',
        'habitant_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dateDme' => 'date',
        'nouveauQtier' => 'string',
        'habitant_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dateDme' => 'required',
        'nouveauQtier' => 'required|string|max:191',
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
