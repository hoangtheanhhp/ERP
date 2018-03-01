<?php

use Illuminate\Database\Seeder;

class AbsencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Absence::class, 10)->create();
    }
}
