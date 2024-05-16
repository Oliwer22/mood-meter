<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('reviews')->delete();
        
        DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'emoji_id' => '5',
                'name' => 'Test',
                'lastName' => 'Tester',
                'leeftijd' => NULL,
                'address' => 'rew',
                'phone' => '234',
                'email' => 'oliwer.w2209@gmail.com',
                'opleiding' => 'Grafisch vormgever',
                'vooropleiding' => 'terwte',
                'review' => 'rw',
                'datum' => '2024-04-03',
                'created_at' => '2024-04-04 00:04:15',
                'updated_at' => '2024-04-04 00:04:15',
            ),
            1 => 
            array (
                'id' => 6,
                'emoji_id' => '2',
                'name' => 'Daan',
                'lastName' => 'LAS',
                'leeftijd' => '81',
                'address' => 'abc123',
                'phone' => '123',
                'email' => 'oliwer.w2209@gmail.com',
            'opleiding' => '(Junior) Accountmanager',
                'vooropleiding' => 'Diamant Jatten',
                'review' => 're',
                'datum' => '2024-04-11',
                'created_at' => '2024-04-11 12:56:18',
                'updated_at' => '2024-04-11 12:56:18',
            ),
            2 => 
            array (
                'id' => 7,
                'emoji_id' => '4',
                'name' => 'Oliwer',
                'lastName' => 'W',
                'leeftijd' => '24',
                'address' => 'abc123',
                'phone' => '123',
                'email' => 'test@gmail.com',
                'opleiding' => 'Grafisch vormgever',
                'vooropleiding' => 'Test',
                'review' => 'jap',
                'datum' => '2024-04-11',
                'created_at' => '2024-04-11 12:58:55',
                'updated_at' => '2024-04-11 12:58:55',
            ),
            3 => 
            array (
                'id' => 8,
                'emoji_id' => '5',
                'name' => 'Oliwer',
                'lastName' => 'q',
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'oliwer.w2209@gmail.com',
                'opleiding' => 'Webdeveloper',
                'vooropleiding' => NULL,
                'review' => 'fgtyhrthyr',
                'datum' => '2024-04-11',
                'created_at' => '2024-04-11 13:29:20',
                'updated_at' => '2024-04-11 13:29:20',
            ),
            4 => 
            array (
                'id' => 10,
                'emoji_id' => '5',
                'name' => 'Test',
                'lastName' => 'AS',
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'oliwer.w2209@gmail.com',
                'opleiding' => 'Allrounder ICT',
                'vooropleiding' => NULL,
                'review' => 'rere',
                'datum' => '2024-05-15',
                'created_at' => '2024-05-15 14:14:42',
                'updated_at' => '2024-05-15 14:14:42',
            ),
            5 => 
            array (
                'id' => 11,
                'emoji_id' => '5',
                'name' => 'Test',
                'lastName' => NULL,
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'oliwer.w2209@gmail.com',
                'opleiding' => NULL,
                'vooropleiding' => 'MAVO',
                'review' => 'rew',
                'datum' => '2024-05-15',
                'created_at' => '2024-05-15 14:16:53',
                'updated_at' => '2024-05-15 14:16:53',
            ),
            6 => 
            array (
                'id' => 12,
                'emoji_id' => '5',
                'name' => 'tewtew',
                'lastName' => NULL,
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'admin@roc.nl',
                'opleiding' => NULL,
                'vooropleiding' => 'Anders',
                'review' => 'twe',
                'datum' => '2024-05-16',
                'created_at' => '2024-05-16 12:22:39',
                'updated_at' => '2024-05-16 12:22:39',
            ),
            7 => 
            array (
                'id' => 13,
                'emoji_id' => '2',
                'name' => 'Test',
                'lastName' => NULL,
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'oliwer.w2209@gmail.com',
                'opleiding' => NULL,
                'vooropleiding' => NULL,
                'review' => 'rwe',
                'datum' => '2024-05-16',
                'created_at' => '2024-05-16 12:23:40',
                'updated_at' => '2024-05-16 12:23:40',
            ),
            8 => 
            array (
                'id' => 14,
                'emoji_id' => '5',
                'name' => 'Test',
                'lastName' => NULL,
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'admin@roc.nl',
                'opleiding' => NULL,
                'vooropleiding' => 'VWO',
                'review' => 'refw',
                'datum' => '2024-05-16',
                'created_at' => '2024-05-16 12:24:22',
                'updated_at' => '2024-05-16 12:24:22',
            ),
            9 => 
            array (
                'id' => 16,
                'emoji_id' => '1',
                'name' => 'pARS',
                'lastName' => NULL,
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'admin@roc.nl',
                'opleiding' => NULL,
                'vooropleiding' => 'Anders',
                'review' => 'ef',
                'datum' => '2024-05-16',
                'created_at' => '2024-05-16 12:25:49',
                'updated_at' => '2024-05-16 12:25:49',
            ),
            10 => 
            array (
                'id' => 17,
                'emoji_id' => '5',
                'name' => 'a',
                'lastName' => NULL,
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'admin@roc.nl',
                'opleiding' => NULL,
                'vooropleiding' => 'test',
                'review' => 'tes',
                'datum' => '2024-05-16',
                'created_at' => '2024-05-16 12:27:47',
                'updated_at' => '2024-05-16 12:27:47',
            ),
            11 => 
            array (
                'id' => 18,
                'emoji_id' => '4',
                'name' => 'ew',
                'lastName' => NULL,
                'leeftijd' => NULL,
                'address' => NULL,
                'phone' => NULL,
                'email' => 'admin@roc.nl',
                'opleiding' => 'Algemeen',
                'vooropleiding' => NULL,
                'review' => 're',
                'datum' => '2024-05-16',
                'created_at' => '2024-01-05 12:28:20',
                'updated_at' => '2024-05-16 12:28:20',
            ),
            12 => 
            array (
                'id' => 19,
                'emoji_id' => '5',
                'name' => 'Oliwer',
                'lastName' => 'W',
                'leeftijd' => '19',
                'address' => '123 boel',
                'phone' => '123 456',
                'email' => 'oliwer.w2209@gmail.com',
                'opleiding' => 'Algemeen',
                'vooropleiding' => 'MAVO',
                'review' => 'test bla bla efojaojfa j4aoi r4a95i0q49uuit q3 t44t5',
                'datum' => '2024-05-16',
                'created_at' => '2024-05-16 15:37:12',
                'updated_at' => '2024-05-16 15:37:12',
            ),
            13 => 
            array (
                'id' => 20,
                'emoji_id' => '3',
                'name' => 'Admin',
                'lastName' => 'Roc',
                'leeftijd' => '23',
                'address' => '123 boel',
                'phone' => '123 456',
                'email' => 'admin@roc.nl',
                'opleiding' => 'Algemeen',
                'vooropleiding' => 'Admin ROC',
                'review' => 'Admins of the ROC',
                'datum' => '2024-05-16',
                'created_at' => '2024-05-16 15:44:04',
                'updated_at' => '2024-05-16 15:44:04',
            ),
        ));
        
        
    }
}