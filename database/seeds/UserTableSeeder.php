<?php

use Illuminate\Database\Seeder;
use App\User;
use Facker\Factory;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i<100; $i++)
        {
            $item = [
                'name'=> $faker->name,
                'email' => $faker->email,
                'password' => \Hash::make('123456'),
            ];
            $user = new User();
            $user->fill($item);
            $user->save();
        }
    }
}
