<?php

namespace Database\Factories;

use App\Models\productservices;
use Illuminate\Database\Eloquent\Factories\Factory;

class productservicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productservices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productServiceName' => $this->faker->word,
        'initiatedQuantity' => $this->faker->randomDigitNotNull,
        'recurringFees' => $this->faker->randomDigitNotNull,
        'additionalFees' => $this->faker->randomDigitNotNull,
        'recurringPeriod' => $this->faker->word,
        'addedBy' => $this->faker->word,
        'addedDate' => $this->faker->date('Y-m-d H:i:s'),
        'clientId' => $this->faker->word,
        'productServiceStatus' => $this->faker->word,
        'vendorId' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
