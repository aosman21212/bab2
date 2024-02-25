<?php

namespace Database\Factories;

use App\Models\vendordata;
use Illuminate\Database\Eloquent\Factories\Factory;

class vendordataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = vendordata::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productServiceId' => $this->faker->word,
        'invoiceNo' => $this->faker->word,
        'invoiceAmount' => $this->faker->randomDigitNotNull,
        'invoiceMonth' => $this->faker->randomDigitNotNull,
        'invoiceYear' => $this->faker->randomDigitNotNull,
        'invoiceDate' => $this->faker->word,
        'addedBy' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
