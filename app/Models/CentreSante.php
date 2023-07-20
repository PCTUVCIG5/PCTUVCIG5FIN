<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CentreSante
 * @package App\Models
 * @version July 16, 2023, 5:38 pm UTC
 *
 * @property string $description
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $typeCent
 * @property string $statutCent
 */
class CentreSante extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'centre_santes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'description',
        'image1',
        'image2',
        'image3',
        'typeCent',
        'statutCent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'image1' => 'string',
        'image2' => 'string',
        'image3' => 'string',
        'typeCent' => 'string',
        'statutCent' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required|string|max:191',
        'image1' => 'required|string|max:191',
        'image2' => 'required|string|max:191',
        'image3' => 'required|string|max:191',
        'typeCent' => 'required|string|max:191',
        'statutCent' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
