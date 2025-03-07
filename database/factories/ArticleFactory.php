<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' =>  $this->faker->sentence(2),
            'author' => Str::limit($this->faker->name, 100),
            'brief' => $this->faker->text(500),
            'content' => $this->faker->paragraph(10),
            'created_at' => now()
        ];
    }
}
