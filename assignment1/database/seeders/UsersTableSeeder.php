<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name'        => 'Mg Mg',
            'language_id'  => 1,
            'email'       => 'mgmg@gmail.com',
            'phone'       => '09 123123123',
            'address'     => 'Yangon',
        ]);
        
        User::updateOrCreate([
            'name'        => 'Ag Ag',
            'language_id'  => 1,
            'email'       => 'agag@gmail.com',
            'phone'       => '09 213213213',
            'address'     => 'Yangon',
        ]);
    }
}
