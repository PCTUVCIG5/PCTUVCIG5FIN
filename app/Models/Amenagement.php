<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Amenagement
 * @package App\Models
 * @version July 29, 2023, 12:07 am UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property string $dateAme
 * @property string $Qtier
 * @property string $descriptionAmen
 * @property integer $type
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
        'Qtier',
        'descriptionAmen',
        'type',
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
        'Qtier' => 'string',
        'descriptionAmen' => 'string',
        'type' => 'integer',
        'habitant_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dateAme' => 'required',
        'Qtier' => 'required|string|max:191',
        'descriptionAmen' => 'required|string|max:255',
        'type' => 'integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'habitant_id' => 'required|unique'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function habitant()
    {
        return $this->belongsTo(\App\Models\Habitant::class, 'habitant_id');
    }
}
