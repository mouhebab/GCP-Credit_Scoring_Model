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
        $user = new App\User;
        $user->name = 'Administrator';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('password');

        $user->save();
    }
}
