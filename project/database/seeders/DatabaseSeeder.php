<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

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
        $admin = [
            [
                'admin' => 'admin',
                'password' => Hash::make('admin'),
            ],
            [
                'admin' => 'yupi',
                'password' => Hash::make('admin'),
            ],
            ];
        foreach ($admin as $key => $value) {
            # code...
            Admin::create($value);
        }
    }
}
