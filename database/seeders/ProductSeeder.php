<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            "name"=>"Oppo",
            "price"=>"50000",
            "category"=>"Mobile",
            "description"=>"Oppo mobile",
            "gallery"=>"https://www.pakmobizone.pk/mobile-phone/oppo-a16-pearl-blue-32gb-3gb/"
            ],
            [
                "name"=>"Samsung",
                "price"=>"32000",
                "category"=>"Mobile",
                "description"=>"Samsung mobile",
                "gallery"=>"https://www.samsung.com/pk/smartphones/galaxy-z-fold2/"
            ],
            [
                "name"=>"Xiaomi",
                "price"=>"70999",
                "category"=>"Mobile",
                "description"=>"Xiaomi mobile",
                "gallery"=>"https://www.google.com/search?q=xiaomi+redmi+note+10&sxsrf=AOaemvIutSczN1rUwvInbgopzhmp_aZj6g:1641410713757&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiPkZi0q5v1AhWfBmMBHRm9CQUQ_AUoAXoECAEQAw&biw=1366&bih=625&dpr=1#imgrc=LJBUDz8hbXArzM"
            ],      
        ]);
    }
}
