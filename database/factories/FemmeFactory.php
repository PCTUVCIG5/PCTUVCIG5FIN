<?php

namespace Database\Factories;

use App\Models\Femme;
use Illuminate\Database\Eloquent\Factories\Factory;

class FemmeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Femme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomFemm' => $this->faker->word,
        'prenFemm' => $this->faker->word,
        'dateNFemm' => $this->faker->word,
        'lieuNFemm' => $this->faker->word,
        'sexeFemm' => $this->faker->word,
        'telFemm' => $this->faker->word,
        'image' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
