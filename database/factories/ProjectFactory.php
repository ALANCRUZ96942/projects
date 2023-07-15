<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name(),
                'creation_date' => $this->faker->unique()->date(),
                'repository_link' => $this->faker->url(),
                'type' => 'project',
                'image' => $this->faker->url(),
            
        ];
    }
}
