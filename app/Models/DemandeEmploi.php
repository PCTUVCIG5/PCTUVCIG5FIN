<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DemandeEmploi
 * @package App\Models
 * @version July 16, 2023, 5:35 pm UTC
 *
 * @property \App\Models\Habitant $habitant
 * @property \App\Models\OffreEmploi $offreEmploi
 * @property string $descriptionDman
 * @property string $cvDman
 * @property string $dateDman
 * @property string $statutDman
 * @property integer $habitant_id
 * @property integer $offre_emploi_id
 */
class DemandeEmploi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'demande_emplois';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descriptionDman',
        'cvDman',
        'dateDman',
        'statutDman',
        'habitant_id',
        'offre_emploi_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descriptionDman' => 'string',
        'cvDman' => 'string',
        'dateDman' => 'date',
        'statutDman' => 'string',
        'habitant_id' => 'integer',
        'offre_emploi_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descriptionDman' => 'required|string|max:191',
        'cvDman' => 'required|string|max:191',
        'dateDman' => 'required',
        'statutDman' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'habitant_id' => 'required',
        'offre_emploi_id' => 'required'
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
    public function offreEmploi()
    {
        return $this->belongsTo(\App\Models\OffreEmploi::class, 'offre_emploi_id');
    }
}
