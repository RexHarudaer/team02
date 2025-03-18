<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       $this->call(VegetableMarketDataTableSeeder::class);
       $user = new User();
       $user->password = Hash::make('12345678');
       $user->email = 'admin@gmail.com';
       $user->name ='Admin';
       $user->role = User::ROLE_ADMIN;
       $user->save();

       $user = new User();
       $user->password = Hash::make('12345678');
       $user->email = 'manager@gmail.com';
       $user->name ='Manager';
       $user->role = User::ROLE_MANAGER;
       $user->save();

       $user = new User();
       $user->password = Hash::make('12345678');
       $user->email = 'user@gmail.com';
       $user->name ='User';
       $user->role = User::ROLE_USER;
       $user->save();

       
    }
}
