<?php

namespace Database\Seeders;
//
use DateTime;
Use DB;
//

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// for foreign
use App\Models\NewsArchive;
use App\Models\Article;

class News_archivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news_archives = [
            [
                'date' => new DateTime,         
                'article_id' => Article::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'date' => new DateTime,         
                'article_id' => Article::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'date' => new DateTime,         
            //     'article_id' => Article::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
        ];

        DB::table('news_archives')->insert($news_archives);
    }
}
