<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sex = $this -> faker -> randomElement(['F','M']);
        $Name = $sex == 'F'? $this->faker->unique()->firstNameFemale():$this->faker->unique()->firstNameMale();
        return [
            'Matricule'=>$this -> faker -> unique()-> numerify('patient-####'),
            'Name' => $Name,
            'Sur_Name'=>$this -> faker -> lastName(),
            'Gender' => $sex,
            'Birth_Date'=>$this -> faker -> date('Y_m_d'),
            'Weight' =>$this -> faker -> numberBetween(1.0,150.0),
            'Height' =>$this -> faker -> numberBetween(1.0,5.0),
        ];
    }
}
