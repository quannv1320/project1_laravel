<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pro_list = [
            [
                'name' => 'Vợt cầu lông Yonex 554',
                'cate_id' => 1,
                'brand_id' => 1,
                'image' => 'image product1',
                'price' => '200',
                'short_desc' => 'Vợt cầu lông short desc',
                'detail' => 'Vợt cầu lông detail',
                'quantity' => 100,
            ],
            [
                'name' => 'Giày Yonex 554',
                'cate_id' => 2,
                'brand_id' => 2,
                'image' => 'image product1',
                'price' => '200',
                'short_desc' => 'Giày short desc',
                'detail' => 'Giày detail',
                'quantity' => 100,
            ],
            [
                'name' => 'Áo Yonex 554',
                'cate_id' => 4,
                'brand_id' => 4,
                'image' => 'image product1',
                'price' => '200',
                'short_desc' => 'Áo short desc',
                'detail' => 'Áo detail',
                'quantity' => 100,
            ],
            [
                'name' => 'Balo Yonex 554',
                'cate_id' => 3,
                'brand_id' => 3,
                'image' => 'image product1',
                'price' => '200',
                'short_desc' => 'Balo short desc',
                'detail' => 'Balo detail',
                'quantity' => 100,
            ],

        ];

        foreach ($pro_list as $item) {
            $model = new Product();
            $model->fill($item);
            $model->save();
        }
    }
}
