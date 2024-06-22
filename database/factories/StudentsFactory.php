<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastname(),
            'birthdate' => $this->faker->date('Y-m-d'),
            'sex' => array_rand(['MALE', 'FEMALE']),
            'address' => $this->faker->address(),
            'year' => rand(1, 4),
            'course' => array_rand([
                'BSBA' => 'BSBA',
                'BSIT' => 'BSIT',
                'HRT' => 'HRT',
                'BSA' => 'BSA'
            ]),
            'section' => array_rand([
                'A' => 'A',
                'B' => 'B',
                'C' => 'C',
            ]),
        ];
    }
}
