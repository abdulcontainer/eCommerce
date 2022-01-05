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
                "name"=>"Iphone 13",
                "price"=>"250000",
                "category"=>"Mobile",
                "description"=>"Iphone with 3 cameras.",
                "gallery"=>"https://www.lg.com/in/mobile-phones/lg-lmf100emw-wing-5g#none"
                ],
            [
                "name"=>"Oppo",
                "price"=>"50000",
                "category"=>"Mobile",
                "description"=>"Oppo mobile",
                "gallery"=>"https://www.pakmobizone.pk/mobile-phone/oppo-a16-pearl-blue-32gb-3gb/"
                ],
            [
                "name"=>"LED",
                "price"=>"32000",
                "category"=>"tv",
                "description"=>"Led tv 16 colors with 4k supportive",
                "gallery"=>"https://www.google.com/search?q=lcd&sxsrf=AOaemvLL61AUyRNIDrBJtnk5xJ3nRmgYwA:1641410811356&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjzg93iq5v1AhVT5uAKHZyVBgUQ_AUoAXoECAkQAw&biw=1366&bih=625&dpr=1#imgrc=LojOWcb_P7QYmM"
                ],
            [
                "name"=>"Dawlance",
                "price"=>"70999",
                "category"=>"fridge",
                "description"=>"a fridge with much more features",
                "gallery"=>"https://www.google.com/search?q=dawlance+fridge&sxsrf=AOaemvLS-EOOmS80_xs1zANHCRyrzFfnTA:1641410985389&source=lnms&tbm=isch&sa=X&ved=2ahUKEwian9u1rJv1AhWD5-AKHRCBBXcQ_AUoAXoECAIQAw&biw=1366&bih=625&dpr=1#imgrc=hTt_K40cunXMeM"
                ],      
        ]);
    }
}
