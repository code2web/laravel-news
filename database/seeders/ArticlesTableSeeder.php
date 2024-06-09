<?php

namespace Database\Seeders;
//
use DateTime;
Use DB;
//
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// for foreign
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\District;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */    
    public function run(): void
    {
        $articles = [
            [
                'title' => "MEN'S BETTER THAN NAKED & JACKET",
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',                
                'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                'user_id' => 1,
                'category_id' => Category::all()->random()->id,
                'district_id' => District::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],            
            [
                'title' => "WoMEN'S BETTER THAN SHOE & SKIRT",
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',                
                'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                'user_id' => 1,
                'category_id' => Category::all()->random()->id,
                'district_id' => District::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],            
            // [
            //     'title' => "MEN'S BORN HISTORY",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BETTER THAN NAKED & JACKET",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "WoMEN'S BETTER THAN SHOE & SKIRT",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BORN HISTORY",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BETTER THAN NAKED & JACKET",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "WoMEN'S BETTER THAN SHOE & SKIRT",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BORN HISTORY",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BETTER THAN NAKED & JACKET",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "WoMEN'S BETTER THAN SHOE & SKIRT",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BORN HISTORY",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BETTER THAN NAKED & JACKET",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "WoMEN'S BETTER THAN SHOE & SKIRT",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],            
            // [
            //     'title' => "MEN'S BORN HISTORY",
            //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            //     tempor incididunt ut labore et dolore magna aliqua consequat.',                
            //     'thumbnail' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
            //     'user_id' => 1,
            //     'category_id' => Category::all()->random()->id,
            //     'district_id' => District::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ]            
                      
        ];

        DB::table('articles')->insert($articles);
    }
}
