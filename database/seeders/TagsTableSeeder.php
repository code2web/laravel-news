<?php

namespace Database\Seeders;
//
use DateTime;
Use DB;
//

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// for foreign
use App\Models\Tag;
use App\Models\Article;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'name' => 'Laravel',         
                // 'article_id' => Article::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Php',         
                // 'article_id' => Article::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            // [
            //     'name' => 'js',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'csss',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'sass',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'nation',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'us',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'uk',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'jamaika',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'hablu',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'mustak',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'jak',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'civil',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'army',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => 'bdr',         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
        ];

        DB::table('tags')->insert($tags);
    }
}
