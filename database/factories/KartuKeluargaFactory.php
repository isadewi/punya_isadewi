<?php

namespace Database\Factories;

use App\Models\KartuKeluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

class KartuKeluargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KartuKeluarga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'no' => $this->faker->randomNumber(),
            'tanggal_pencatatan' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'jorong_id' => 1
           
        ];
    }
}
