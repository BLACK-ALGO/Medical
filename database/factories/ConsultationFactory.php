<?php

namespace Database\Factories;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matriculepatient' =>Patient::factory() ,
            'date' => $this -> faker -> date('Y_m_d'),
            'complaints' => $this -> faker -> realText(50),
            'diagnostic'=> $this -> faker -> realText(150),
            'prescription'=> $this -> faker -> realText(600),
            'additional_examinations'=> $this -> faker -> sentence(),


        ];
    }
}
