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
        DB::table('emoji')->insert([
            'id'=>'1',
            'emoji_id'=>'1',
            'emoji'=>'Dead',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'2',
            'emoji_id'=>'2',
            'emoji'=>'Frown',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'3',
            'emoji_id'=>'3',
            'emoji'=>'Neutral',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'4',
            'emoji_id'=>'4',
            'emoji'=>'Smile',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'5',
            'emoji_id'=>'5',
            'emoji'=>'Happy',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'6',
            'emoji_id'=>'1',
            'emoji'=>'Dead',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'7',
            'emoji_id'=>'1',
            'emoji'=>'Dead',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'8',
            'emoji_id'=>'2',
            'emoji'=>'Frown',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'9',
            'emoji_id'=>'3',
            'emoji'=>'Neutral',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
        DB::table('emoji')->insert([
            'id'=>'10',
            'emoji_id'=>'4',
            'emoji'=>'Smile',
            'created_at'=>'2024-02-24 22:35:59',
            'updated_at'=>'2024-02-24 22:35:59'
        ]);
    }
}