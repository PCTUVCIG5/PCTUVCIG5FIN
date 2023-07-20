<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Divoce
 * @package App\Models
 * @version July 16, 2023, 5:39 pm UTC
 *
 * @property \App\Models\Femme $femme
 * @property \App\Models\Homme $homme
 * @property string $divoces_date
 * @property string $divoces_lieu
 * @property integer $homme_id
 * @property integer $femme_id
 */
class Divoce extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'divoces';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'divoces_date',
        'divoces_lieu',
        'homme_id',
        'femme_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'divoces_date' => 'date',
        'divoces_lieu' => 'string',
        'homme_id' => 'integer',
        'femme_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'divoces_date' => 'required',
        'divoces_lieu' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'homme_id' => 'required',
        'femme_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function femme()
    {
        return $this->belongsTo(\App\Models\Femme::class, 'femme_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function homme()
    {
        return $this->belongsTo(\App\Models\Homme::class, 'homme_id');
    }
}
