<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "title"=> $this->faker->name(),
            "desc" => $this->faker->text(),
            "type" => $this->faker->randomElement([
                "free","paid"
            ]),
            "category_id" => $this->faker->numberBetween(1,23),
            "user_id"=>$this->faker->numberBetween(4,23),
            "start_date"=>$this->faker->date(),

        ];
    }
}
