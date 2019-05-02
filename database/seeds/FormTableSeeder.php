<?php

use Illuminate\Database\Seeder;

class FormTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            'name' => str_random(10),
            'firstname' => str_random(10),
            'lastname' => str_random(10),
        ];
        DB::table('form')->insert($users);
    }
}
