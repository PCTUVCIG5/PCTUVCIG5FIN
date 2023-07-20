<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Habitant
 * @package App\Models
 * @version July 17, 2023, 5:29 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $amenagements
 * @property \Illuminate\Database\Eloquent\Collection $centreInterets
 * @property \Illuminate\Database\Eloquent\Collection $deces
 * @property \Illuminate\Database\Eloquent\Collection $demandeEmplois
 * @property \Illuminate\Database\Eloquent\Collection $demenagements
 * @property \Illuminate\Database\Eloquent\Collection $femmes
 * @property \Illuminate\Database\Eloquent\Collection $hommes
 * @property \Illuminate\Database\Eloquent\Collection $refMetiers
 * @property string $nomHabi
 * @property string $prenHabi
 * @property string $dateNHabi
 * @property string $lieuNHabi
 * @property string $sexeHabi
 * @property string $telHabi
 * @property string $image
 */
class Habitant extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'habitants';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomHabi',
        'prenHabi',
        'dateNHabi',
        'lieuNHabi',
        'sexeHabi',
        'telHabi',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomHabi' => 'string',
        'prenHabi' => 'string',
        'dateNHabi' => 'date',
        'lieuNHabi' => 'string',
        'sexeHabi' => 'string',
        'telHabi' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomHabi' => 'required|string|max:191',
        'prenHabi' => 'required|string|max:191',
        'dateNHabi' => 'required',
        'lieuNHabi' => 'required|string|max:191',
        'sexeHabi' => 'required|string|max:191',
        'telHabi' => 'required|string|max:191',
        'image' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function amenagements()
    {
        return $this->hasMany(\App\Models\Amenagement::class, 'habitant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function centreInterets()
    {
        return $this->hasMany(\App\Models\CentreInteret::class, 'habitant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function deces()
    {
        return $this->hasMany(\App\Models\Dece::class, 'habitant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function demandeEmplois()
    {
        return $this->hasMany(\App\Models\DemandeEmploi::class, 'habitant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function demenagements()
    {
        return $this->hasMany(\App\Models\Demenagement::class, 'habitant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function femmes()
    {
        return $this->hasMany(\App\Models\Femme::class, 'habitant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function hommes()
    {
        return $this->hasMany(\App\Models\Homme::class, 'habitant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function refMetiers()
    {
        return $this->hasMany(\App\Models\RefMetier::class, 'habitant_id');
    }
}
