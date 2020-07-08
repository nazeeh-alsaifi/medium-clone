<?php

use App\Tag;
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

        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(TagSeeder::class);

        DB::table('article_tag')->insert([
            "article_id"=>1,
            'tag_id' => 1,
        ]);
        DB::table('article_tag')->insert([
            "article_id"=>1,
            'tag_id' => 2,
            'updated_at' => now()
        ]);
        DB::table('article_tag')->insert([
            "article_id"=>2,
            'tag_id' => 1,
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert([
            "article_id"=>2,
            'tag_id' => 3,
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert([
            "article_id"=>3,
            'tag_id' => 2,
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert([
            "article_id"=>4,
            'tag_id' => 4,
            'updated_at' => now()
        ]);

        DB::table('article_tag')->insert([
            "article_id"=>5,
            'tag_id' => 4,
            'updated_at' => now()
        ]);

    }
}
