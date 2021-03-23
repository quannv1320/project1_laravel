<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate_list = [
            [
                'name' => 'Vợt cầu lông',
                'description' => 'Vợt cầu lông desc'
            ],
            [
                'name' => 'Giày cầu lông',
                'description' => 'Giày cầu lông desc'
            ],
            [
                'name' => 'Quần áo cầu lông',
                'description' => 'Quần áo cầu lông desc'
            ],
            [
                'name' => 'Balo cầu lông',
                'description' => 'Balo cầu lông desc'
            ],
            [
                'name' => 'Phụ kiện cầu lông',
                'description' => 'Phụ kiện cầu lông desc'
            ],
        ];

        foreach ($cate_list as $item) {
            $model = new Category();
            $model->fill($item);
            $model->save();
        }
    }
}
