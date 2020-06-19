<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i<30; $i++)
        {
            $item = [
                'cate_name'=> $faker->name,
                'created_by' => rand(1,100),
            ];
            $user = new Category();
            $user->fill($item);
            $user->save();
        }
    }
}
