<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'Nurbol6300',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Nurbol6789'),
        ]);
    }
}