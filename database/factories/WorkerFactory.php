<?php

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Worker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'first_name' => $this->faker->name(),
//            'second_name' => $this->faker->name(),
//            'position' => $this->faker->text(),
//            'salary' => $this->faker->randomDigit,
//            'created_at' => $this->faker->dateTime(),
//            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
