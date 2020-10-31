<?php

use Illuminate\Database\Seeder;
use App\User;
class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Admin',
               'email'=>'johndoe@hotmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('07070707'),
            ],
            [
               'name'=>'Regular User',
               'email'=>'reguser@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('07070707'),
            ],
            [
               'name'=>'Afif Alfiano',
               'email'=>'afifalfiano2@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('Bismillah@1'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
