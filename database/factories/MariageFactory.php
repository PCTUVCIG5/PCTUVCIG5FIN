<?php

namespace Database\Factories;

use App\Models\Mariage;
use Illuminate\Database\Eloquent\Factories\Factory;

class MariageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mariage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mariage_date' => $this->faker->word,
        'mariage_lieu' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'homme_id' => $this->faker->word,
        'femme_id' => $this->faker->word
        ];
    }
}
