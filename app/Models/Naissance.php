<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Naissance
 * @package App\Models
 * @version July 16, 2023, 5:38 pm UTC
 *
 * @property \App\Models\Femme $femme
 * @property \App\Models\Homme $homme
 * @property string $prefecture
 * @property string $centretatcivil
 * @property string $registre
 * @property string $acte
 * @property string $date_acte
 * @property string $nom
 * @property string $prenom
 * @property string $delivre_a
 * @property string $delivre_le
 * @property string $delivre_an
 * @property string $num_serie
 * @property string $naissance_jour_moi
 * @property string $naissance_an
 * @property string $naissance_heure
 * @property string $naissance_minuite
 * @property string $naissance_nom_prenom
 * @property string $naissance_lieu
 * @property string $naissance_sexe
 * @property string $declaration_faite_par
 * @property string $declaration_recue_pa
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
        'prefecture',
        'centretatcivil',
        'registre',
        'acte',
        'date_acte',
        'nom',
        'prenom',
        'delivre_a',
        'delivre_le',
        'delivre_an',
        'num_serie',
        'naissance_jour_moi',
        'naissance_an',
        'naissance_heure',
        'naissance_minuite',
        'naissance_nom_prenom',
        'naissance_lieu',
        'naissance_sexe',
        'declaration_faite_par',
        'declaration_recue_pa',
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
        'prefecture' => 'string',
        'centretatcivil' => 'string',
        'registre' => 'string',
        'acte' => 'string',
        'date_acte' => 'date',
        'nom' => 'string',
        'prenom' => 'string',
        'delivre_a' => 'string',
        'delivre_le' => 'date',
        'delivre_an' => 'string',
        'num_serie' => 'string',
        'naissance_jour_moi' => 'string',
        'naissance_an' => 'string',
        'naissance_heure' => 'string',
        'naissance_minuite' => 'string',
        'naissance_nom_prenom' => 'string',
        'naissance_lieu' => 'string',
        'naissance_sexe' => 'string',
        'declaration_faite_par' => 'string',
        'declaration_recue_pa' => 'string',
        'homme_id' => 'integer',
        'femme_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'prefecture' => 'required|string|max:191',
        'centretatcivil' => 'required|string|max:191',
        'registre' => 'required|string|max:191',
        'acte' => 'required|string|max:191',
        'date_acte' => 'required',
        'nom' => 'required|string|max:191',
        'prenom' => 'required|string|max:191',
        'delivre_a' => 'required|string|max:191',
        'delivre_le' => 'required',
        'delivre_an' => 'required|string|max:191',
        'num_serie' => 'required|string|max:191',
        'naissance_jour_moi' => 'required|string|max:191',
        'naissance_an' => 'required|string|max:191',
        'naissance_heure' => 'required|string|max:191',
        'naissance_minuite' => 'required|string|max:191',
        'naissance_nom_prenom' => 'required|string|max:191',
        'naissance_lieu' => 'required|string|max:191',
        'naissance_sexe' => 'required|string|max:191',
        'declaration_faite_par' => 'required|string|max:191',
        'declaration_recue_pa' => 'required|string|max:191',
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
