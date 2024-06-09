<?php

namespace Database\Seeders;
//
use DateTime;
Use DB;
//

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// for foreign
use App\Models\District;
use App\Models\Division;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            [
                'name' => "Modhua",         
                'division_id' => Division::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Changa",  
                'division_id' => Division::all()->random()->id,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            // [
            //     'name' => "Uttara",
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                       
            // [
            //     'name' => "Dhanmondi",         
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Faramget",  
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Demra",
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                       
            // [
            //     'name' => "Kuril",         
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Tinso",  
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Nayagao",
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                       
            // [
            //     'name' => "Satihar",         
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Baghpara",  
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Nama",
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                       
            // [
            //     'name' => "Ucha",         
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Khalpar",  
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],
            // [
            //     'name' => "Akasgami",
            //     'division_id' => Division::all()->random()->id,
            //     'created_at' => new DateTime,
            //     'updated_at' => null,
            // ],                                       
        ];

        DB::table('districts')->insert($districts);
    }
}
