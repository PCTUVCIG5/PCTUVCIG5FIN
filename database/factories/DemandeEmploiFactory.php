<?php

namespace Database\Factories;

use App\Models\DemandeEmploi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandeEmploiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DemandeEmploi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descriptionDman' => $this->faker->word,
        'cvDman' => $this->faker->word,
        'dateDman' => $this->faker->word,
        'statutDman' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'habitant_id' => $this->faker->word,
        'offre_emploi_id' => $this->faker->word
        ];
    }
}
