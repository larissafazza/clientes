<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sellers')->insert([
            [
                'name' => 'João',
                'mail' => 'joão@hotmail.com',
            ],
            [
                'name' => 'Loren',
                'mail' => 'Loren@hotmail.com',
            ],
            [
                'name' => 'Silvana',
                'mail' => 'silvana@hotmail.com',
            ],
            [
                'name' => 'Julia',
                'mail' => 'juh@hotmail.com',
            ],
        ]);
    }
}
