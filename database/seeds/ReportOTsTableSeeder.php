<?php

use Illuminate\Database\Seeder;

class ReportOTsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\ReportOT::class, 10)->create();
    }
}
