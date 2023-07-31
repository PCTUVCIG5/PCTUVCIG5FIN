<?php

namespace Database\Factories;

use App\Models\Femmes;
use Illuminate\Database\Eloquent\Factories\Factory;

class FemmesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Femmes::class;

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
