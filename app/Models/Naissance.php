<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Naissance
 * @package App\Models
 * @version July 29, 2023, 12:06 pm UTC
 *
 * @property \App\Models\Femme $femme
 * @property \App\Models\Homme $homme
 * @property string $nom_nais
 * @property string $prenoms_nais
 * @property string $dateNaissance_nais
 * @property string $lieuNaissance_nais
 * @property string $mode_nais
 * @property string $lieuHabitation_nais
 * @property string $statutChef
 * @property integer $homme_id
 * @property integer $femme_id
 */
class Naissance extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'naissances';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom_nais',
        'prenoms_nais',
        'dateNaissance_nais',
        'lieuNaissance_nais',
        'mode_nais',
        'lieuHabitation_nais',
        'statutChef',
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
        'nom_nais' => 'string',
        'prenoms_nais' => 'string',
        'dateNaissance_nais' => 'date',
        'lieuNaissance_nais' => 'string',
        'mode_nais' => 'string',
        'lieuHabitation_nais' => 'string',
        'statutChef' => 'string',
        'homme_id' => 'integer',
        'femme_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_nais' => 'required|string|max:191',
        'prenoms_nais' => 'required|string|max:191',
        'dateNaissance_nais' => 'required',
        'lieuNaissance_nais' => 'required|string|max:191',
        'mode_nais' => 'required|string|max:191',
        'lieuHabitation_nais' => 'required|string|max:191',
        'statutChef' => 'string|max:191',
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
