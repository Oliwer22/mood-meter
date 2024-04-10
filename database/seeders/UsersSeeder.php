<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Oliwer',
            'email'=>'oliwer.w2209@gmail.com',
            'password' => '$2y$10$ORN.2ItF.WHdMjsxl6stDOWfDZ04DU9b/o85lz1hPMMCGxLreCdxW',
            'role'=>'Admin',
            'last_log'=>'',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);

    }
}