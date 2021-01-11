<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@lembiru.id',
                'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
                'role' => 'admin'
            ]
        ]);
    }
}