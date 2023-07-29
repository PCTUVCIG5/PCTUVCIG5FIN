<?php

namespace Database\Factories;

use App\Models\Homme;
use Illuminate\Database\Eloquent\Factories\Factory;

class HommeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Homme::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomHomm' => $this->faker->word,
        'prenHomm' => $this->faker->word,
        'dateNHomm' => $this->faker->word,
        'lieuNHomm' => $this->faker->word,
        'sexeHomm' => $this->faker->word,
        'telHomm' => $this->faker->word,
        'image' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
