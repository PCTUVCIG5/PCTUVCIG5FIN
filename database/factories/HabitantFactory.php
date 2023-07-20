<?php

namespace Database\Factories;

use App\Models\Habitant;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabitantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habitant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomHabi' => $this->faker->word,
        'prenHabi' => $this->faker->word,
        'dateNHabi' => $this->faker->word,
        'lieuNHabi' => $this->faker->word,
        'sexeHabi' => $this->faker->word,
        'telHabi' => $this->faker->word,
        'image' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
