<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Faadlilah Ahmad Purwanto',
            'username' => 'faadlilah89',
            'password' => Hash::make('faadlilah89'),
            'role_id' => 1, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
