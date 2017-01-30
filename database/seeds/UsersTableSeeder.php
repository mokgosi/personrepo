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
        $now = date('Y-m-d H:i:s');

        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
