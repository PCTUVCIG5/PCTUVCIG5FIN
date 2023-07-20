<?php

namespace Database\Factories;

use App\Models\Naissance;
use Illuminate\Database\Eloquent\Factories\Factory;

class NaissanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Naissance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'prefecture' => $this->faker->word,
        'centretatcivil' => $this->faker->word,
        'registre' => $this->faker->word,
        'acte' => $this->faker->word,
        'date_acte' => $this->faker->word,
        'nom' => $this->faker->word,
        'prenom' => $this->faker->word,
        'delivre_a' => $this->faker->word,
        'delivre_le' => $this->faker->word,
        'delivre_an' => $this->faker->word,
        'num_serie' => $this->faker->word,
        'naissance_jour_moi' => $this->faker->word,
        'naissance_an' => $this->faker->word,
        'naissance_heure' => $this->faker->word,
        'naissance_minuite' => $this->faker->word,
        'naissance_nom_prenom' => $this->faker->word,
        'naissance_lieu' => $this->faker->word,
        'naissance_sexe' => $this->faker->word,
        'declaration_faite_par' => $this->faker->word,
        'declaration_recue_pa' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'homme_id' => $this->faker->word,
        'femme_id' => $this->faker->word
        ];
    }
}
