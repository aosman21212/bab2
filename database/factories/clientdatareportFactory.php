<?php

namespace Database\Factories;

use App\Models\clientdatareport;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientdatareportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clientdatareport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productServiceId' => $this->faker->word,
        'clientId' => $this->faker->word,
        'month' => $this->faker->randomDigitNotNull,
        'year' => $this->faker->randomDigitNotNull,
        'quantity' => $this->faker->randomDigitNotNull,
        'additionalQuantity' => $this->faker->word,
        'additionalCost' => $this->faker->word,
        'totalMonthlyDue' => $this->faker->word,
        'outstandingBalance' => $this->faker->word,
        'totalDue' => $this->faker->word,
        'addedBy' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
