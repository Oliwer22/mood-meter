<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Rewiews extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'id'=> '1',
            'emoji_id'=>'5',
            'name'=>'Test',
            'lastName'=>'Tester',
            'leeftijd'=>'45',
            'address'=>'rew',
            'phone'=>'234',
            'email'=>'oliwer.w2209@gmail.com',
            'opleiding'=>'Grafisch vormgever',
            'vooropleiding'=> 'terwte',
            'review'=>'rw',
            'datum'=>'2024-04-03',
            'created_at'=>'2024-04-04 00:04:15',
            'updated_at'=>'2024-04-04 00:04:15'
        ]);
        DB::table('reviews')->insert([
            'id'=> '2',
            'emoji_id'=>'2',
            'name'=>'Testss',
            'lastName'=>'Teer32ster',
            'leeftijd'=>'23',
            'address'=>'rew',
            'phone'=>'234r32',
            'email'=>'oliwer.w2209@gmail.com',
            'opleiding'=>'Grafisch vormgever',
            'vooropleiding'=> 'trewrerwte',
            'review'=>'rw',
            'datum'=>'2024-04-03',
            'created_at'=>'2024-04-04 00:04:15',
            'updated_at'=>'2024-04-04 00:04:15'
        ]);
    }
}