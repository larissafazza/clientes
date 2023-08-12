<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('person_type')->insert([
            [
                'type' => 'Pessoa Física',
            ],
            [
                'type' => 'Pessoa Jurídica',
            ],
        ]);
    }
}
