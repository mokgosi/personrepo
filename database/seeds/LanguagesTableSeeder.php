<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = ['Afrikaans', 'English', 'Tswana', 'Sotho', 'Zulu'];
        
        $now = date('Y-m-d H:i:s');

        for($i=0; $i < count($languages); $i++ ) {
            DB::table('languages')->insert([
                'name' => $languages[$i],
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
