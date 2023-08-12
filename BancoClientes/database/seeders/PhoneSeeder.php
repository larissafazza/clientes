<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phones')->insert([
            [
                'number' => '32988536240',
                'client_id' => '1',
            ],
            [
                'number' => '32988447840',
                'client_id' => '1',
            ],
            [
                'number' => '32988326240',
                'client_id' => '1',
            ],
            [
                'number' => '32988936240',
                'client_id' => '2',
            ],
            [
                'number' => '32988526240',
                'client_id' => '3',
            ],
            [
                'number' => '32988536940',
                'client_id' => '4',
            ],
            
        ]);
        
    }
}
