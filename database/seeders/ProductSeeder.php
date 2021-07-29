<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id'=> 1,
                'name' => 'Áo sân nhà MU',
                'price' => 10000,
                'thumbnail'=>'data:image/jpeg;base64,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',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 2,
                'name' => 'Quần',
                'price' => 20000,
                'thumbnail'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6nn6m5Ms-Jmxon6hDfweXE9jAftjfyeVO1g&usqp=CAU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 3,
                    'name' => 'Áo 2',
                'price' => 10000,

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 4,
                'name' => 'Áo',
                'price' => 10000,
                'thumbnail' => 'https://duidesign.vn/134135-quan-dui-nam-dai-ong-con-trang-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 5,
                'name' => 'Áo',
                'price' => 10000,
                'thumbnail' => 'https://duidesign.vn/134135-quan-dui-nam-dai-ong-con-trang-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 6,
                'name' => 'Áo',
                'price' => 10000,
                'thumbnail' => 'https://duidesign.vn/134135-quan-dui-nam-dai-ong-con-trang-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 7,
                'name' => 'Áo',
                'price' => 10000,
                'thumbnail' => 'https://duidesign.vn/134135-quan-dui-nam-dai-ong-con-trang-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 8,
                'name' => 'Áo',
                'price' => 10000,
                'thumbnail' => 'https://duidesign.vn/134135-quan-dui-nam-dai-ong-con-trang-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 9,
                'name' => 'Áo',
                'price' => 10000,
                'thumbnail' => 'https://duidesign.vn/134135-quan-dui-nam-dai-ong-con-trang-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=> 10,
                'name' => 'Áo',
                'price' => 10000,
                'thumbnail' => 'https://duidesign.vn/134135-quan-dui-nam-dai-ong-con-trang-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
