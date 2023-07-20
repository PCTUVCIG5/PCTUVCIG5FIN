<?php

namespace Database\Factories;

use App\Models\Divoce;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivoceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Divoce::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'divoces_date' => $this->faker->word,
        'divoces_lieu' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'homme_id' => $this->faker->word,
        'femme_id' => $this->faker->word
        ];
    }
}
