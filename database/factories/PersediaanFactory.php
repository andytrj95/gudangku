<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersediaanFactory extends Factory
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
            'kode_barang' => $this->faker->unique()->ean8(),
            'nama_barang' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'jumlah' =>$this->faker->numberBetween($min=10 , $max=500),
            'satuan' => 'kg',
            'updatemasuk' => now(),
            'updatekeluar' =>now()
        ];
    }
}
