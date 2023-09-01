<?php

use App\Admin;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'password' => Hash::make('123456'),
            'name' =>'mathekcode',
            'email'=>'admin@admin.com',
            'job_title'=>'.Mr'
        ]);
    }
}
