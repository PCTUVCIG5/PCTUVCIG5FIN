<?php

namespace Database\Factories;

use App\Models\OffreEmploi;
use Illuminate\Database\Eloquent\Factories\Factory;

class OffreEmploiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OffreEmploi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descriptionOfr' => $this->faker->word,
        'dateDebutOfr' => $this->faker->word,
        'dateFinOfr' => $this->faker->word,
        'entrepriseOfr' => $this->faker->word,
        'statutOfr' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
