<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Amenagement
 * @package App\Models
 * @version July 16, 2023, 5:39 pm UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property string $dateAme
 * @property string $ancienQtier
 * @property integer $habitant_id
 */
class Amenagement extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'amenagements';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dateAme',
        'ancienQtier',
        'habitant_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dateAme' => 'date',
        'ancienQtier' => 'string',
        'habitant_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dateAme' => 'required',
        'ancienQtier' => 'required|string|max:191',
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
