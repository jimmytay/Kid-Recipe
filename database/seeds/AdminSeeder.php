<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\User::create([
          'name' => 'Admin',
          'age' => 30,
          'gendar' => 'male',
          'email' => 'admin@admin.com',
          'password' => bcrypt('verysafepassword'),
          'type' => User::ADMIN_TYPE,
      ]);
    }
}
