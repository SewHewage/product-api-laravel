<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Premium Wireless Headphones',
                'description' => 'High-quality sound with noise cancellation',
                'price' => 99.99,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=300&fit=crop'
            ],
            [
                'name' => 'Premium Wireless Headphones',
                'description' => 'High-quality sound with noise cancellation',
                'price' => 99.99,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=300&fit=crop'
            ],
            [
                'name' => 'Smart Fitness Band',
                'description' => 'Track your steps, heart rate, and sleep quality',
                'price' => 49.99,
                'image_url' => 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=400&h=300&fit=crop'
            ],
            [
                'name' => 'Portable Bluetooth Speaker',
                'description' => 'Loud, clear stereo sound with long battery life',
                'price' => 39.50,
                'image_url' => 'https://images.unsplash.com/photo-1585386959984-a4155224a1ad?w=400&h=300&fit=crop'
            ],
            [
                'name' => 'Ergonomic Office Chair',
                'description' => 'Comfortable support for long working hours',
                'price' => 129.00,
                'image_url' => 'https://images.unsplash.com/photo-1616627981363-8a1675c635a8?w=400&h=300&fit=crop'
            ],
            [
                'name' => '4K Ultra HD Monitor',
                'description' => 'Crystal clear visual experience for work or gaming',
                'price' => 249.99,
                'image_url' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=300&fit=crop'
            ]

        ]);
    }
}
