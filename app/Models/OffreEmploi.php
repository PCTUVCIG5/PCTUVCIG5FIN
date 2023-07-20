<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class OffreEmploi
 * @package App\Models
 * @version July 16, 2023, 5:39 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $demandeEmplois
 * @property string $descriptionOfr
 * @property string $dateDebutOfr
 * @property string $dateFinOfr
 * @property string $entrepriseOfr
 * @property string $statutOfr
 */
class OffreEmploi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'offre_emplois';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descriptionOfr',
        'dateDebutOfr',
        'dateFinOfr',
        'entrepriseOfr',
        'statutOfr'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descriptionOfr' => 'string',
        'dateDebutOfr' => 'date',
        'dateFinOfr' => 'date',
        'entrepriseOfr' => 'string',
        'statutOfr' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descriptionOfr' => 'required|string|max:191',
        'dateDebutOfr' => 'required',
        'dateFinOfr' => 'required',
        'entrepriseOfr' => 'required|string|max:191',
        'statutOfr' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function demandeEmplois()
    {
        return $this->hasMany(\App\Models\DemandeEmploi::class, 'offre_emploi_id');
    }
}
