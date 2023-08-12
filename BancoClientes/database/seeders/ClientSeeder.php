<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Pedro',
                'mail' => 'pedro@ice.ufjf.br',
                'image_path' => 'BancoClientes\resources\images\pedro.jpg',
                'person_type_id' => 1,
            ],
            [
                'name' => 'Caio Vincenzo',
                'mail' => 'caiovrd@ice.ufjf.br',
                'image_path' => 'BancoClientes\resources\images\caio.webp',
                'person_type_id' => 1,
            ],
            [
                'name' => 'Doce Mania Bomboniere',
                'mail' => 'docemania.jf@gmail.com',
                'image_path' => 'BancoClientes\resources\images\docemania.png',
                'person_type_id' => 2,
            ],
            [
                'name' => 'Lucas',
                'mail' => 'lucas@gmail.com.br',
                'image_path' => 'BancoClientes\resources\images\lucas.jpg',
                'person_type_id' => 1,
            ],
        ]);
    }
}
