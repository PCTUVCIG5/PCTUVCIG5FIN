<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Activite
 * @package App\Models
 * @version July 16, 2023, 5:38 pm UTC
 *
 * @property string $nomActi
 * @property string $typeActi
 */
class Activite extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'activites';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomActi',
        'typeActi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomActi' => 'string',
        'typeActi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomActi' => 'required|string|max:191',
        'typeActi' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
