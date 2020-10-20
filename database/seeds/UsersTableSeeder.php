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
        //

        DB::table('users')->insert([
            'name' => 'Madni Admin',
            'email' => 'madni@admin.com',
            'password' => '$2y$10$0CqwahO2E/ngzJntA.0J5./jkYoxd/UxXSAr30SzyHvvuAJ2DR8bu',
        ]);
    }
}
