<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'student_id'=> rand(1,2),
            'subject_code' => 'IT',rand(1000,2000),
            'name' => array_rand([
                'CAPSTONE PROJECT' => 'CAPSTONE PROJECT',
                'DATA COM 4' => 'DATA COM 4',
            ]),
            'description' => $this->faker->paragraph(2),
            'instructor' => $this->faker->name(),
            'schedule' => array_rand([
                'MTH 1PM - 6PM' => 'MTH 1PM - 6PM',
                'TF 8:30AM - 1:30PM' => 'TF 8:30AM - 1:30PM',
                'WED 9AM - 3PM' => 'WED 9AM - 3PM',
                'SAT 8AM - 12PM' => 'SAT 8AM - 12PM',
            ]),
            'prelim' => mt_rand(1.0 * 10, 5.0 * 10)/10,
            'midterm' => mt_rand(1.0 * 10, 5.0 * 10)/10,
            'prefinal' => mt_rand(1.0 * 10, 5.0 * 10)/10,
            'final' => mt_rand(1.0 * 10, 5.0 * 10)/10,
            'date_taken' => $this->faker->date(),
        ];
    }
}
