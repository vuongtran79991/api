<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(ThanhVienTableSeeder::class);

    }

}
class userSeeder extends Seeder
{
    public function run(){
        DB::table('users')->insert([
            ['name'=>'CC','email'=>str_random(5).'@gmail.com','password'=>bcrypt(123)],
            ['name'=>'AA','email'=>str_random(5).'@gmail.com','password'=>bcrypt(123)],
            ['name'=>'BB','email'=>str_random(5).'@gmail.com','password'=>bcrypt(123)],
        ]);
    }
}
class ImagesTableSeeder extends Seeder{
    public function run(){
        DB::table('images')->insert([
            ['name'=>'hinhquan_1.png','product_id'=>1],
            ['name'=>'hinhquan_2.png','product_id'=>1],
            ['name'=>'hinhquan_3.png','product_id'=>1],
            ['name'=>'hinhquan_4.png','product_id'=>1],
            ['name'=>'hinhquan_5.png','product_id'=>1],

            ['name'=>'hinhao_1.png','product_id'=>2],
            ['name'=>'hinhao_2.png','product_id'=>2],
            ['name'=>'hinhao_3.png','product_id'=>2],
            ['name'=>'hinhao_4.png','product_id'=>2],
            ['name'=>'hinhao_5.png','product_id'=>2],

            ]);
    }

}
class CarTableSeeder extends Seeder{
    public function run(){
        DB::table('cars')->insert([
            ['name'=>'BMW','price'=>55000000],
            ['name'=>'Audi','price'=>42000000],
            ['name'=>'Honde','price'=>30000000],
            ['name'=>'Suzuki','price'=>80000000],
            ['name'=>'Yamaha','price'=>15000000],

        ]);
    }
}
class ColorTableSeeder extends Seeder{
    public function run(){
        DB::table('colors')->insert([
            ['name'=>'red'],
            ['name'=>'blue'],
            ['name'=>'pink'],
            ['name'=>'white'],
            ['name'=>'black'],


        ]);
    }
}
class CarColorTableSeeder extends Seeder{
    public function run(){
        DB::table('car_colors')->insert([
            ['car_id'=>1,'colors_id'=>1],
            ['car_id'=>2,'colors_id'=>1],
            ['car_id'=>3,'colors_id'=>1],
            ['car_id'=>4,'colors_id'=>2],
            ['car_id'=>4,'colors_id'=>3],
            ['car_id'=>4,'colors_id'=>4],
            ['car_id'=>5,'colors_id'=>1],



        ]);
    }
}
class ThanhVienTableSeeder extends Seeder{
    public function run(){
        DB::table('thanh_viens')->insert([
            ['user'=>'vuong','pass'=>Hash::make(123),'level'=>1],
            ['user'=>'walter','pass'=>Hash::make(123),'level'=>2],
            ['user'=>'unknown','pass'=>bcrypt(123),'level'=>2],




        ]);
    }
}
