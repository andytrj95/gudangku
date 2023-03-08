<?php

namespace Database\Seeders;

use App\Models\masterkategori;
use App\Models\mastersatuan;
use App\Models\supplier;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        masterkategori::create([
            'nama_kategori' => 'Pakaian'
        ]);

        masterkategori::create([
            'nama_kategori' => 'Makanan'
        ]);
        masterkategori::create([
            'nama_kategori' => 'Minuman'
        ]);

        mastersatuan::create([
            'nama_satuan' => 'Pcs'
        ]);

        mastersatuan::create([
            'nama_satuan' => 'kg'
        ]);


        mastersatuan::create([
            'nama_satuan' => 'butir'
        ]);


        supplier::create([
            'name' => 'PT. Sinko Prima Alloy',
            'nomorhp' => '081234567890',
            'alamat' => 'Jl. Tambak Osowilangun No.61 Pergudangan Osowilangun Permai E7-E8 Surabaya, Jawa Timur 60191 - Indonesia'
        ]);

        supplier::create([
            'name' => 'PT Beauty Kasatama Indonesia',
            'nomorhp' => '081234567890',
            'alamat' => 'Pergudangan Bumi Maspion, Jalan Raya Maspion Romokalisari 1 no. A-5, Segoromadu, Romokalisari, kec. Benowo, Surabaya, Jatim - Indonesia 60192'
        ]);

        supplier::create([
            'name' => 'PT. Sumber Organik',
            'nomorhp' => '081234567890',
            'alamat' => 'Jl. Romokalisari I, kec. Benowo, Surabaya, Jatim - Indonesia 60192
            Nomor Nomor telepon: 031 - 5464662'
        ]);

         \App\Models\User::factory(10)->create();
         \App\Models\masterbarang::factory(30)->create();
        //  \App\Models\Persediaan::factory(10)->create();
    }
}
