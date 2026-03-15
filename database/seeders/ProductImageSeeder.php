<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		ProductImage::firstOrCreate(
			['id' => 1],
			[
				'path' => 'example-product-1.jpg',
				'product_id' => 1
			]
		);
		ProductImage::firstOrCreate(
			['id' => 2],
			[
				'path' => 'example-product-1-black.jpg',
				'product_id' => 1
			]
		);
		ProductImage::firstOrCreate(
			['id' => 3],
			[
				'path' => 'example-product-1-white.jpg',
				'product_id' => 1
			]
		);
		ProductImage::firstOrCreate(
			['id' => 4],
			[
				'path' => 'example-product-2.jpg',
				'product_id' => 2
			]
		);
		ProductImage::firstOrCreate(
			['id' => 5],
			[
				'path' => 'example-product-2-black.jpg',
				'product_id' => 2
			]
		);
		ProductImage::firstOrCreate(
			['id' => 6],
			[
				'path' => 'example-product-2-blue.jpg',
				'product_id' => 2
			]
		);
		ProductImage::firstOrCreate(
			['id' => 7],
			[
				'path' => 'example-product-2-darkblue.jpg',
				'product_id' => 2
			]
		);
		ProductImage::firstOrCreate(
			['id' => 8],
			[
				'path' => 'example-product-2-orange.jpg',
				'product_id' => 2
			]
		);
		ProductImage::firstOrCreate(
			['id' => 9],
			[
				'path' => 'example-product-2-red.jpg',
				'product_id' => 2
			]
		);
		ProductImage::firstOrCreate(
			['id' => 10],
			[
				'path' => 'example-product-3.jpg',
				'product_id' => 3
			]
		);
		ProductImage::firstOrCreate(
			['id' => 11],
			[
				'path' => 'example-product-3-black.jpg',
				'product_id' => 3
			]
		);
		ProductImage::firstOrCreate(
			['id' => 12],
			[
				'path' => 'example-product-3-blue.jpg',
				'product_id' => 3
			]
		);
		ProductImage::firstOrCreate(
			['id' => 13],
			[
				'path' => 'example-product-3-grey.jpg',
				'product_id' => 3
			]
		);
		ProductImage::firstOrCreate(
			['id' => 14],
			[
				'path' => 'example-product-3-red.jpg',
				'product_id' => 3
			]
		);
		ProductImage::firstOrCreate(
			['id' => 15],
			[
				'path' => 'example-product-4.jpg',
				'product_id' => 4
			]
		);
		ProductImage::firstOrCreate(
			['id' => 15],
			[
				'path' => 'example-product-4-black.jpg',
				'product_id' => 4
			]
		);
		ProductImage::firstOrCreate(
			['id' => 16],
			[
				'path' => 'example-product-4-red.jpg',
				'product_id' => 4
			]
		);
    }
}
