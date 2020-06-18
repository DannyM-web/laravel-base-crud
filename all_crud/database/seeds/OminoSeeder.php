<?php

use App\Omino;
use Illuminate\Database\Seeder;

class OminoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Omino::class, 30) -> create();
    }
}
