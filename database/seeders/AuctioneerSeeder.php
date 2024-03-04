<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Auctioneer;


class AuctioneerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 Auctioneer instance with random data and save it to the database
        Auctioneer::factory()->count(10)->create();
    }
}
