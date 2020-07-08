<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            "id"=>1,
            "name"=>"programming",
            'created_at' => now(),
            'updated_at' => now(),
            ]);
        DB::table('tags')->insert([
            "id"=>2,
            "name"=>"math",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            "id"=>3,
            "name"=>"sport",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tags')->insert([
            "id"=>4,
            "name"=>"health",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
