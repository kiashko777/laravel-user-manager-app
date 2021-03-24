<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'title' => $this->faker->sentence,
//            'thumbnail' => $this->faker->image(),
//            'description' => $this->faker->text,
//            'created_at' => $this->faker->dateTime(),
//            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
