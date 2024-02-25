<?php

namespace Database\Factories;

use App\Models\vendors;
use Illuminate\Database\Eloquent\Factories\Factory;

class vendorsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = vendors::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vendorName' => $this->faker->word,
        'vendorLogo' => $this->faker->word,
        'addedBy' => $this->faker->word,
        'vendorStatus' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
