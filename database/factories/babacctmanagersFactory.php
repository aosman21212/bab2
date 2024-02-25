<?php

namespace Database\Factories;

use App\Models\babacctmanagers;
use Illuminate\Database\Eloquent\Factories\Factory;

class babacctmanagersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = babacctmanagers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'AcctManagerName' => $this->faker->word,
        'AcctManagerContact' => $this->faker->word,
        'AcctManagerEmail' => $this->faker->word,
        'AcctManagerStatus' => $this->faker->word,
        'addedBy' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
