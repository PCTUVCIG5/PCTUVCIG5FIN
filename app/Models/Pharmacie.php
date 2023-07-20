<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pharmacie
 * @package App\Models
 * @version July 16, 2023, 5:38 pm UTC
 *
 * @property string $description
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $typePhar
 * @property string $statutPhar
 * @property string $gardePhar
 */
class Pharmacie extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pharmacies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'description',
        'image1',
        'image2',
        'image3',
        'typePhar',
        'statutPhar',
        'gardePhar'
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
        'typePhar' => 'string',
        'statutPhar' => 'string',
        'gardePhar' => 'string'
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
        'typePhar' => 'required|string|max:191',
        'statutPhar' => 'required|string|max:191',
        'gardePhar' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
