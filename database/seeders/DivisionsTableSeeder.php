<?php

namespace Database\Seeders;
//
use DateTime;
Use DB;
//

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            [
                'name' => "Dhaka",         
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Khulna",         
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            // [
            //     'name' => "Rajshahi",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "Dinajpur",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Borisal",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "MOymon",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "Josor",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Chuadanga",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Rang",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "Rangpur",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Kolkata",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Rasajtan",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
            // [
            //     'name' => "Up",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Dilli",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Chennai",         
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                                         
        ];

        DB::table('divisions')->insert($divisions);
    }
}
