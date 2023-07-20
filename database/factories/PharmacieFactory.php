<?php

namespace Database\Factories;

use App\Models\Pharmacie;
use Illuminate\Database\Eloquent\Factories\Factory;

class PharmacieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pharmacie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->word,
        'image1' => $this->faker->word,
        'image2' => $this->faker->word,
        'image3' => $this->faker->word,
        'typePhar' => $this->faker->word,
        'statutPhar' => $this->faker->word,
        'gardePhar' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
