<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class masterBarangFactory extends Factory
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
            'kode_barang' => $this->faker->unique()->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),
            'nama_barang' => $this->faker->unique()->sentence($nbWords = 3, $variableNbWords = true),
            'kategori_id' =>mt_rand(1,3),
            'satuan_id' => mt_rand(1,3),
            'supplier_id' => mt_rand(1,3),
            'qty' =>   mt_rand(1,3),
            'harga_beli' => $this->faker->numberBetween($min = 1000, $max = 9000) ,// 8567,
            'harga_jual' => $this->faker->numberBetween($min = 2000, $max = 9000), // 8567,
            'tanggal' => now()
        ];
    }
}
