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
            'name' => 'Andrew Craigie',
            'email' => 'andrew@craigie.co',
            'password' => bcrypt('jf8kkn4kd8meh'),
        ]);
    }
}
