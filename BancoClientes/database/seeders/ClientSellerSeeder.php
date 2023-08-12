<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_seller')->insert([
            [
                'client_id' => 1,
                'seller_id' => 1
            ],
            [
                'client_id' => 2,
                'seller_id' => 1
            ],
            [
                'client_id' => 3,
                'seller_id' => 2
            ],
            [
                'client_id' => 4,
                'seller_id' => 1
            ],
        ]);
    }
}
