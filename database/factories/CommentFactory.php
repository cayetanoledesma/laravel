<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "content" => User::factory(),
            "user_id"=>$this->faker->text(50),
            "product_id"=>$this->faker->text(500),
            "created_at"=>now()
        ];
    }
}
