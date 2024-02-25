<?php

namespace Database\Factories;

use App\Models\clients;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clientName' => $this->faker->word,
        'clientLogo' => $this->faker->word,
        'contactName' => $this->faker->word,
        'mobileNo' => $this->faker->word,
        'email' => $this->faker->word,
        'babAcctManagerId' => $this->faker->word,
        'orderDate' => $this->faker->word,
        'startDate' => $this->faker->word,
        'bill_to' => $this->faker->word,
        'addedBy' => $this->faker->word,
        'addedDate' => $this->faker->word,
        'clientStatus' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
