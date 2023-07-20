<?php

namespace Database\Factories;

use App\Models\RefMetier;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefMetierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RefMetier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'metier_id' => $this->faker->word,
        'habitant_id' => $this->faker->word
        ];
    }
}
