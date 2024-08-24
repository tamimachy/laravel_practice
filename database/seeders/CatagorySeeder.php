<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catagory;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catagory = collect([
            [
                'name' => 'Electronics',
                'description' => 'Electronics and Product',
                'price' => 1200,
                'published' => '2024-07-18 08:12:12'
            ],
            [
                'name' => 'Economy',
                'description' => 'Electronics and Product',
                'price' => 1400,
                'published' => '2024-07-18 08:12:12'
            ],
            [
                'name' => 'General',
                'description' => 'Electronics and Product',
                'price' => 12000,
                'published' => '2024-07-18 08:12:12'
            ]
        ]);

        $catagory->each(function($catagory){
            Catagory::insert($catagory);
        });
        // Catagory::create([
        //     'name' => 'Electronics',
        //     'description' => 'Electronics and Product',
        //     'price' => 1200,
        //     'published' => '2024-07-18 08:12:12'
        // ]);
    }
}
