<?php

namespace Database\Seeders;
//
use DateTime;
Use DB;
//

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => "National",         
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Intertainment",  
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            // [
            //     'name' => "Life",
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "Style",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Ok",  
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Cnn",
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "BBC",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Hati",  
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Bagh",
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "Biral",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Boonna",  
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Pahar",
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "Jhil",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Bon",  
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Sundar",
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ]                                                        
                                                                    
        ];

        DB::table('categories')->insert($categories);
    }
}
