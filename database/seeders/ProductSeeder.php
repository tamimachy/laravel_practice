<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\File;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database\json\product.json');
        $product = collect(json_decode($json));
        $product->each(function ($product) {
            Product::create([
                'name' => $product->name,
                'description' => $product->description,
                'catagory_id' => $product->catagory_id
            ]);
        });
        

    }
}
