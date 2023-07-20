<?php

namespace Database\Factories;

use App\Models\CentreInteret;
use Illuminate\Database\Eloquent\Factories\Factory;

class CentreInteretFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CentreInteret::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idHom' => $this->faker->word,
        'typeCeIn' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'habitant_id' => $this->faker->word
        ];
    }
}
