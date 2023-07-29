<?php

namespace Database\Factories;

use App\Models\Amenagement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmenagementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Amenagement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateAme' => $this->faker->word,
        'Qtier' => $this->faker->word,
        'descriptionAmen' => $this->faker->word,
        'type' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'habitant_id' => $this->faker->word
        ];
    }
}
