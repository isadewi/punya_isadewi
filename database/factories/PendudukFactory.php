<?php

namespace Database\Factories;

use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'kartu_keluarga_id' => 1,
          'nama' => $this->faker->word,
          'nik'  => $this->faker->randomNumber(),
          'tempat_lahir' => $this->faker->word,
          'tanggal_lahir' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
          'agama'  => $this->faker->word,
          'jenis_kelamin' => $this->faker->word,
          'level_pendidikan_id' =>1,
           'pekerjaan_id' =>1,
           'status_pernikahan' => $this->faker->word,
           'status_keluarga' => $this->faker->word,
           'kewarganegaraan_id' =>1,
           'ayah' => $this->faker->word,
           'ibu' => $this->faker->word
        ];
    }
}
