<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nizami',
            'surname'=>'Alizade',
            'email' => 'Nizamializade85@gmail.com',
            'password' => bcrypt('nizami'),
        ]);
    }
}
