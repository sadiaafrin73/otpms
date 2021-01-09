<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('12345'),
        'address'=>'dhaka',
        'mobile_number'=>'01705371057',
        'gender'=>'female',
        'role'=>'admin'
        

        ]);
        
    }
}
