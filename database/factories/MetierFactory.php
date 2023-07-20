<?php

namespace Database\Factories;

use App\Models\Metier;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Metier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomMtie' => $this->faker->word,
        'typeMtie' => $this->faker->word,
        'statutMtie' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
