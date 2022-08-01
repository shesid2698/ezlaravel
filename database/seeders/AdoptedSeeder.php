<?php

namespace Database\Seeders;

use App\Models\Adopted;
use Illuminate\Database\Seeder;

class AdoptedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adopted::truncate();
        Adopted::factory()->times(10)->create();
    }
}