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
            'nom_nais' => $this->faker->word,
        'prenoms_nais' => $this->faker->word,
        'dateNaissance_nais' => $this->faker->word,
        'lieuNaissance_nais' => $this->faker->word,
        'mode_nais' => $this->faker->word,
        'lieuHabitation_nais' => $this->faker->word,
        'statutChef' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'homme_id' => $this->faker->word,
        'femme_id' => $this->faker->word
        ];
    }
}
