<?php

use Illuminate\Database\Seeder;

class FullFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\FullForm::class, 5)->create();
    }
}
