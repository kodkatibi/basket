<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
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
        Customer::factory()->count(10)->create();
        Category::factory()->count(10)->create();
        Product::factory()->count(50)->create();
        Order::factory()->count(100)->create();
        OrderItem::factory()->count(500)->create();
    }
}
