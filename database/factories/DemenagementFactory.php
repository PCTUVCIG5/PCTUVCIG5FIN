<?php

namespace Database\Factories;

use App\Models\Demenagement;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemenagementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demenagement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateDme' => $this->faker->word,
        'nouveauQtier' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'habitant_id' => $this->faker->word
        ];
    }
}
