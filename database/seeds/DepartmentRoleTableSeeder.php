<?php

use Illuminate\Database\Seeder;

class DepartmentRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\DepartmentRole::class, 1)->create();
    }
}
