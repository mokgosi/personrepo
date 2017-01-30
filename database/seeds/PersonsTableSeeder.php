<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        for($i=1; $i <= 5; $i++ ) {
            DB::table('persons')->insert([
                'first_name' => "Name-$i",
                'surname' => "Surname-$i",
                'email' => "person$i@gmail.com",
                'mobile' => "072011299$i",
                'language_id' => $i,
                'date_of_birth' => date('Y-m-d'),
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
