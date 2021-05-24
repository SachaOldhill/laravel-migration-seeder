<?php

use Illuminate\Database\Seeder;
use App\Boss;
class BossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Boss::class,10)->create();
    }
}
