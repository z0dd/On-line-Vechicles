<?php

use Illuminate\Database\Seeder;

class MechanicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mechanic::class, 5)->make();
    }
}
