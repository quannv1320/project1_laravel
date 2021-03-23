<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand_list = [
            [
                'name' => 'Yonex',
                'logo' => 'Yonex logo',
                'description' => 'Yonex desc'
            ],
            [
                'name' => 'Victor',
                'logo' => 'Victor logo',
                'description' => 'Victor desc'
            ],
            [
                'name' => 'Ashaway',
                'logo' => 'Ashaway logo',
                'description' => 'Ashaway desc'
            ],
            [
                'name' => 'Wilson',
                'logo' => 'Wilson logo',
                'description' => 'Wilson desc'
            ],
            [
                'name' => 'Li Ning',
                'logo' => 'Li Ning logo',
                'description' => 'Li Ning desc'
            ],
        ];

        foreach ($brand_list as $item) {
            $model = new Brand();
            $model->fill($item);
            $model->save();
        }
    }
}
