<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmojiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('emoji')->delete();
        
        DB::table('emoji')->insert(array (
            0 => 
            array (
                'id' => 1,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-03-29 04:22:27',
                'updated_at' => '2024-04-01 01:22:27',
            ),
            1 => 
            array (
                'id' => 2,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 09:22:35',
                'updated_at' => '2024-04-03 02:22:35',
            ),
            2 => 
            array (
                'id' => 3,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-01 01:22:53',
                'updated_at' => '2024-04-01 03:22:53',
            ),
            3 => 
            array (
                'id' => 4,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-01 08:23:00',
                'updated_at' => '2024-04-02 08:23:00',
            ),
            4 => 
            array (
                'id' => 5,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-01 21:23:07',
                'updated_at' => '2024-04-18 21:23:07',
            ),
            5 => 
            array (
                'id' => 6,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 01:27:24',
                'updated_at' => '2024-04-21 01:27:24',
            ),
            6 => 
            array (
                'id' => 7,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 14:54:42',
                'updated_at' => '2024-04-01 14:54:42',
            ),
            7 => 
            array (
                'id' => 8,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-03-06 14:55:03',
                'updated_at' => '2024-03-06 14:55:03',
            ),
            8 => 
            array (
                'id' => 9,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 14:55:23',
                'updated_at' => '2024-04-01 14:55:23',
            ),
            9 => 
            array (
                'id' => 10,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-01 15:37:35',
                'updated_at' => '2024-04-01 15:37:35',
            ),
            10 => 
            array (
                'id' => 11,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 15:39:36',
                'updated_at' => '2024-04-01 15:39:36',
            ),
            11 => 
            array (
                'id' => 12,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 15:54:01',
                'updated_at' => '2024-04-01 15:54:01',
            ),
            12 => 
            array (
                'id' => 13,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 14:55:23',
                'updated_at' => '2024-04-01 14:55:23',
            ),
            13 => 
            array (
                'id' => 14,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-02 09:30:45',
                'updated_at' => '2024-04-02 09:30:45',
            ),
            14 => 
            array (
                'id' => 15,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-03 18:20:10',
                'updated_at' => '2024-04-03 18:20:10',
            ),
            15 => 
            array (
                'id' => 16,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-04 11:45:32',
                'updated_at' => '2024-04-04 11:45:32',
            ),
            16 => 
            array (
                'id' => 17,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-05 16:15:55',
                'updated_at' => '2024-04-05 16:15:55',
            ),
            17 => 
            array (
                'id' => 18,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-06 13:10:22',
                'updated_at' => '2024-04-06 13:10:22',
            ),
            18 => 
            array (
                'id' => 19,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-07 08:40:17',
                'updated_at' => '2024-04-07 08:40:17',
            ),
            19 => 
            array (
                'id' => 20,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-08 20:05:39',
                'updated_at' => '2024-04-08 20:05:39',
            ),
            20 => 
            array (
                'id' => 21,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-09 10:55:48',
                'updated_at' => '2024-04-09 10:55:48',
            ),
            21 => 
            array (
                'id' => 22,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-10 15:25:11',
                'updated_at' => '2024-04-10 15:25:11',
            ),
            22 => 
            array (
                'id' => 23,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-11 12:30:27',
                'updated_at' => '2024-04-11 12:30:27',
            ),
            23 => 
            array (
                'id' => 24,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-12 07:15:36',
                'updated_at' => '2024-04-12 07:15:36',
            ),
            24 => 
            array (
                'id' => 25,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-13 22:00:59',
                'updated_at' => '2024-04-13 22:00:59',
            ),
            25 => 
            array (
                'id' => 26,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-14 09:10:44',
                'updated_at' => '2024-04-14 09:10:44',
            ),
            26 => 
            array (
                'id' => 27,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-15 14:35:18',
                'updated_at' => '2024-04-15 14:35:18',
            ),
            27 => 
            array (
                'id' => 28,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-16 11:20:53',
                'updated_at' => '2024-04-16 11:20:53',
            ),
            28 => 
            array (
                'id' => 29,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-17 06:45:29',
                'updated_at' => '2024-04-17 06:45:29',
            ),
            29 => 
            array (
                'id' => 30,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-18 23:50:07',
                'updated_at' => '2024-04-18 23:50:07',
            ),
            30 => 
            array (
                'id' => 31,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-19 08:25:02',
                'updated_at' => '2024-04-19 08:25:02',
            ),
            31 => 
            array (
                'id' => 32,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-20 13:40:41',
                'updated_at' => '2024-04-20 13:40:41',
            ),
            32 => 
            array (
                'id' => 33,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 17:14:09',
                'updated_at' => '2024-04-01 17:14:09',
            ),
            33 => 
            array (
                'id' => 34,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 17:36:43',
                'updated_at' => '2024-04-01 17:36:43',
            ),
            34 => 
            array (
                'id' => 35,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 17:45:33',
                'updated_at' => '2024-04-01 17:45:33',
            ),
            35 => 
            array (
                'id' => 36,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-01 17:49:20',
                'updated_at' => '2024-04-01 17:49:20',
            ),
            36 => 
            array (
                'id' => 37,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-01 17:49:33',
                'updated_at' => '2024-04-01 17:49:33',
            ),
            37 => 
            array (
                'id' => 38,
                'emoji_id' => '1',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 18:03:20',
                'updated_at' => '2024-04-01 18:03:20',
            ),
            38 => 
            array (
                'id' => 39,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 18:05:06',
                'updated_at' => '2024-04-01 18:05:06',
            ),
            39 => 
            array (
                'id' => 40,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 18:07:06',
                'updated_at' => '2024-04-01 18:07:06',
            ),
            40 => 
            array (
                'id' => 41,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-01 21:32:48',
                'updated_at' => '2024-04-01 21:32:48',
            ),
            41 => 
            array (
                'id' => 42,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 21:58:21',
                'updated_at' => '2024-04-01 21:58:21',
            ),
            42 => 
            array (
                'id' => 43,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-01 22:37:18',
                'updated_at' => '2024-04-01 22:37:18',
            ),
            43 => 
            array (
                'id' => 44,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-01 22:59:44',
                'updated_at' => '2024-04-01 22:59:44',
            ),
            44 => 
            array (
                'id' => 45,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-01 23:00:45',
                'updated_at' => '2024-04-01 23:00:45',
            ),
            45 => 
            array (
                'id' => 46,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-01 23:00:52',
                'updated_at' => '2024-04-01 23:00:52',
            ),
            46 => 
            array (
                'id' => 47,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-02 14:12:15',
                'updated_at' => '2024-04-02 14:12:15',
            ),
            47 => 
            array (
                'id' => 48,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-02 14:45:02',
                'updated_at' => '2024-04-02 14:45:02',
            ),
            48 => 
            array (
                'id' => 49,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-02 14:48:44',
                'updated_at' => '2024-04-02 14:48:44',
            ),
            49 => 
            array (
                'id' => 50,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-02 14:49:02',
                'updated_at' => '2024-04-02 14:49:02',
            ),
            50 => 
            array (
                'id' => 51,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-02 14:50:02',
                'updated_at' => '2024-04-02 14:50:02',
            ),
            51 => 
            array (
                'id' => 52,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-02 20:01:30',
                'updated_at' => '2024-04-02 20:01:30',
            ),
            52 => 
            array (
                'id' => 53,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-02 21:58:36',
                'updated_at' => '2024-04-02 21:58:36',
            ),
            53 => 
            array (
                'id' => 54,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-02 21:59:28',
                'updated_at' => '2024-04-02 21:59:28',
            ),
            54 => 
            array (
                'id' => 55,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-03 18:57:26',
                'updated_at' => '2024-04-03 18:57:26',
            ),
            55 => 
            array (
                'id' => 56,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-03 20:45:19',
                'updated_at' => '2024-04-03 20:45:19',
            ),
            56 => 
            array (
                'id' => 57,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-03 21:43:58',
                'updated_at' => '2024-04-03 21:43:58',
            ),
            57 => 
            array (
                'id' => 58,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-03 21:52:21',
                'updated_at' => '2024-04-03 21:52:21',
            ),
            58 => 
            array (
                'id' => 59,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-03 23:37:38',
                'updated_at' => '2024-04-03 23:37:38',
            ),
            59 => 
            array (
                'id' => 60,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-03 23:45:37',
                'updated_at' => '2024-04-03 23:45:37',
            ),
            60 => 
            array (
                'id' => 61,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-03 23:46:16',
                'updated_at' => '2024-04-03 23:46:16',
            ),
            61 => 
            array (
                'id' => 62,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-03 23:46:28',
                'updated_at' => '2024-04-03 23:46:28',
            ),
            62 => 
            array (
                'id' => 63,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-03 23:46:34',
                'updated_at' => '2024-04-03 23:46:34',
            ),
            63 => 
            array (
                'id' => 64,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-04 00:04:15',
                'updated_at' => '2024-04-04 00:04:15',
            ),
            64 => 
            array (
                'id' => 65,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-04 00:36:11',
                'updated_at' => '2024-04-04 00:36:11',
            ),
            65 => 
            array (
                'id' => 66,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-10 22:04:58',
                'updated_at' => '2024-04-10 22:04:58',
            ),
            66 => 
            array (
                'id' => 67,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-10 22:05:06',
                'updated_at' => '2024-04-10 22:05:06',
            ),
            67 => 
            array (
                'id' => 68,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-04-11 09:44:54',
                'updated_at' => '2024-04-11 09:44:54',
            ),
            68 => 
            array (
                'id' => 69,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-11 09:57:29',
                'updated_at' => '2024-04-11 09:57:29',
            ),
            69 => 
            array (
                'id' => 70,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-11 10:00:15',
                'updated_at' => '2024-04-11 10:00:15',
            ),
            70 => 
            array (
                'id' => 71,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-11 11:30:59',
                'updated_at' => '2024-04-11 11:30:59',
            ),
            71 => 
            array (
                'id' => 72,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-11 12:23:25',
                'updated_at' => '2024-04-11 12:23:25',
            ),
            72 => 
            array (
                'id' => 73,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-11 12:23:47',
                'updated_at' => '2024-04-11 12:23:47',
            ),
            73 => 
            array (
                'id' => 74,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-11 12:23:54',
                'updated_at' => '2024-04-11 12:23:54',
            ),
            74 => 
            array (
                'id' => 75,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-11 12:24:04',
                'updated_at' => '2024-04-11 12:24:04',
            ),
            75 => 
            array (
                'id' => 76,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-11 12:24:11',
                'updated_at' => '2024-04-11 12:24:11',
            ),
            76 => 
            array (
                'id' => 77,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-04-11 12:55:37',
                'updated_at' => '2024-04-11 12:55:37',
            ),
            77 => 
            array (
                'id' => 78,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-11 12:56:18',
                'updated_at' => '2024-04-11 12:56:18',
            ),
            78 => 
            array (
                'id' => 79,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-11 12:58:55',
                'updated_at' => '2024-04-11 12:58:55',
            ),
            79 => 
            array (
                'id' => 80,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-11 13:25:53',
                'updated_at' => '2024-04-11 13:25:53',
            ),
            80 => 
            array (
                'id' => 81,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-11 13:29:20',
                'updated_at' => '2024-04-11 13:29:20',
            ),
            81 => 
            array (
                'id' => 82,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-04-11 13:31:29',
                'updated_at' => '2024-04-11 13:31:29',
            ),
            82 => 
            array (
                'id' => 83,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-04-11 13:31:44',
                'updated_at' => '2024-04-11 13:31:44',
            ),
            83 => 
            array (
                'id' => 84,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-04-11 13:32:29',
                'updated_at' => '2024-04-11 13:32:29',
            ),
            84 => 
            array (
                'id' => 85,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-13 08:52:53',
                'updated_at' => '2024-05-13 08:52:53',
            ),
            85 => 
            array (
                'id' => 86,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-13 10:11:31',
                'updated_at' => '2024-05-13 10:11:31',
            ),
            86 => 
            array (
                'id' => 87,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-13 10:11:46',
                'updated_at' => '2024-05-13 10:11:46',
            ),
            87 => 
            array (
                'id' => 88,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-13 14:41:45',
                'updated_at' => '2024-05-13 14:41:45',
            ),
            88 => 
            array (
                'id' => 89,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-13 14:41:59',
                'updated_at' => '2024-05-13 14:41:59',
            ),
            89 => 
            array (
                'id' => 90,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-13 14:42:05',
                'updated_at' => '2024-05-13 14:42:05',
            ),
            90 => 
            array (
                'id' => 91,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-13 14:42:14',
                'updated_at' => '2024-05-13 14:42:14',
            ),
            91 => 
            array (
                'id' => 92,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-13 14:42:28',
                'updated_at' => '2024-05-13 14:42:28',
            ),
            92 => 
            array (
                'id' => 93,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-13 14:42:37',
                'updated_at' => '2024-05-13 14:42:37',
            ),
            93 => 
            array (
                'id' => 94,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-13 14:42:44',
                'updated_at' => '2024-05-13 14:42:44',
            ),
            94 => 
            array (
                'id' => 95,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-13 14:43:07',
                'updated_at' => '2024-05-13 14:43:07',
            ),
            95 => 
            array (
                'id' => 96,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-13 14:45:43',
                'updated_at' => '2024-05-13 14:45:43',
            ),
            96 => 
            array (
                'id' => 97,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-15 13:48:06',
                'updated_at' => '2024-05-15 13:48:06',
            ),
            97 => 
            array (
                'id' => 98,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-15 14:00:48',
                'updated_at' => '2024-05-15 14:00:48',
            ),
            98 => 
            array (
                'id' => 99,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-15 14:01:40',
                'updated_at' => '2024-05-15 14:01:40',
            ),
            99 => 
            array (
                'id' => 100,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-15 14:02:03',
                'updated_at' => '2024-05-15 14:02:03',
            ),
            100 => 
            array (
                'id' => 101,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:02:19',
                'updated_at' => '2024-05-15 14:02:19',
            ),
            101 => 
            array (
                'id' => 102,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-15 14:07:05',
                'updated_at' => '2024-05-15 14:07:05',
            ),
            102 => 
            array (
                'id' => 103,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-05-15 14:07:15',
                'updated_at' => '2024-05-15 14:07:15',
            ),
            103 => 
            array (
                'id' => 104,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-05-15 14:07:23',
                'updated_at' => '2024-05-15 14:07:23',
            ),
            104 => 
            array (
                'id' => 105,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-05-15 14:08:19',
                'updated_at' => '2024-05-15 14:08:19',
            ),
            105 => 
            array (
                'id' => 106,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-15 14:08:49',
                'updated_at' => '2024-05-15 14:08:49',
            ),
            106 => 
            array (
                'id' => 107,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-05-15 14:08:56',
                'updated_at' => '2024-05-15 14:08:56',
            ),
            107 => 
            array (
                'id' => 108,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:09:26',
                'updated_at' => '2024-05-15 14:09:26',
            ),
            108 => 
            array (
                'id' => 109,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-15 14:09:42',
                'updated_at' => '2024-05-15 14:09:42',
            ),
            109 => 
            array (
                'id' => 110,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:10:01',
                'updated_at' => '2024-05-15 14:10:01',
            ),
            110 => 
            array (
                'id' => 111,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:10:02',
                'updated_at' => '2024-05-15 14:10:02',
            ),
            111 => 
            array (
                'id' => 112,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-15 14:10:32',
                'updated_at' => '2024-05-15 14:10:32',
            ),
            112 => 
            array (
                'id' => 113,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:11:07',
                'updated_at' => '2024-05-15 14:11:07',
            ),
            113 => 
            array (
                'id' => 114,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-15 14:11:48',
                'updated_at' => '2024-05-15 14:11:48',
            ),
            114 => 
            array (
                'id' => 115,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-15 14:11:50',
                'updated_at' => '2024-05-15 14:11:50',
            ),
            115 => 
            array (
                'id' => 116,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:12:02',
                'updated_at' => '2024-05-15 14:12:02',
            ),
            116 => 
            array (
                'id' => 117,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:12:23',
                'updated_at' => '2024-05-15 14:12:23',
            ),
            117 => 
            array (
                'id' => 118,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-15 14:13:00',
                'updated_at' => '2024-05-15 14:13:00',
            ),
            118 => 
            array (
                'id' => 119,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-15 14:14:22',
                'updated_at' => '2024-05-15 14:14:22',
            ),
            119 => 
            array (
                'id' => 120,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-15 14:14:42',
                'updated_at' => '2024-05-15 14:14:42',
            ),
            120 => 
            array (
                'id' => 121,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-15 14:16:43',
                'updated_at' => '2024-05-15 14:16:43',
            ),
            121 => 
            array (
                'id' => 122,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-15 14:16:53',
                'updated_at' => '2024-05-15 14:16:53',
            ),
            122 => 
            array (
                'id' => 123,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-05-16 12:04:45',
                'updated_at' => '2024-05-16 12:04:45',
            ),
            123 => 
            array (
                'id' => 124,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 12:11:34',
                'updated_at' => '2024-05-16 12:11:34',
            ),
            124 => 
            array (
                'id' => 125,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 12:12:12',
                'updated_at' => '2024-05-16 12:12:12',
            ),
            125 => 
            array (
                'id' => 126,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 12:12:17',
                'updated_at' => '2024-05-16 12:12:17',
            ),
            126 => 
            array (
                'id' => 127,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 12:12:29',
                'updated_at' => '2024-05-16 12:12:29',
            ),
            127 => 
            array (
                'id' => 128,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 12:12:35',
                'updated_at' => '2024-05-16 12:12:35',
            ),
            128 => 
            array (
                'id' => 129,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 12:12:35',
                'updated_at' => '2024-05-16 12:12:35',
            ),
            129 => 
            array (
                'id' => 130,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 12:14:56',
                'updated_at' => '2024-05-16 12:14:56',
            ),
            130 => 
            array (
                'id' => 131,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 12:19:58',
                'updated_at' => '2024-05-16 12:19:58',
            ),
            131 => 
            array (
                'id' => 132,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:22:25',
                'updated_at' => '2024-05-16 12:22:25',
            ),
            132 => 
            array (
                'id' => 133,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:22:39',
                'updated_at' => '2024-05-16 12:22:39',
            ),
            133 => 
            array (
                'id' => 134,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 12:23:27',
                'updated_at' => '2024-05-16 12:23:27',
            ),
            134 => 
            array (
                'id' => 135,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 12:23:40',
                'updated_at' => '2024-05-16 12:23:40',
            ),
            135 => 
            array (
                'id' => 136,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:24:13',
                'updated_at' => '2024-05-16 12:24:13',
            ),
            136 => 
            array (
                'id' => 137,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:24:22',
                'updated_at' => '2024-05-16 12:24:22',
            ),
            137 => 
            array (
                'id' => 138,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:24:32',
                'updated_at' => '2024-05-16 12:24:32',
            ),
            138 => 
            array (
                'id' => 139,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:24:45',
                'updated_at' => '2024-05-16 12:24:45',
            ),
            139 => 
            array (
                'id' => 140,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:24:55',
                'updated_at' => '2024-05-16 12:24:55',
            ),
            140 => 
            array (
                'id' => 141,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 12:25:33',
                'updated_at' => '2024-05-16 12:25:33',
            ),
            141 => 
            array (
                'id' => 142,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 12:25:49',
                'updated_at' => '2024-05-16 12:25:49',
            ),
            142 => 
            array (
                'id' => 143,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:27:36',
                'updated_at' => '2024-05-16 12:27:36',
            ),
            143 => 
            array (
                'id' => 144,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 12:27:47',
                'updated_at' => '2024-05-16 12:27:47',
            ),
            144 => 
            array (
                'id' => 145,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-05-16 12:28:02',
                'updated_at' => '2024-05-16 12:28:02',
            ),
            145 => 
            array (
                'id' => 146,
                'emoji_id' => '4',
                'emoji' => 'Smile',
                'created_at' => '2024-05-16 12:28:20',
                'updated_at' => '2024-05-16 12:28:20',
            ),
            146 => 
            array (
                'id' => 147,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 14:20:12',
                'updated_at' => '2024-05-16 14:20:12',
            ),
            147 => 
            array (
                'id' => 148,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 14:20:24',
                'updated_at' => '2024-05-16 14:20:24',
            ),
            148 => 
            array (
                'id' => 149,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 14:21:48',
                'updated_at' => '2024-05-16 14:21:48',
            ),
            149 => 
            array (
                'id' => 150,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 14:22:16',
                'updated_at' => '2024-05-16 14:22:16',
            ),
            150 => 
            array (
                'id' => 151,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 14:22:24',
                'updated_at' => '2024-05-16 14:22:24',
            ),
            151 => 
            array (
                'id' => 152,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 14:22:53',
                'updated_at' => '2024-05-16 14:22:53',
            ),
            152 => 
            array (
                'id' => 153,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 14:23:50',
                'updated_at' => '2024-05-16 14:23:50',
            ),
            153 => 
            array (
                'id' => 154,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 14:23:56',
                'updated_at' => '2024-05-16 14:23:56',
            ),
            154 => 
            array (
                'id' => 155,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 14:24:04',
                'updated_at' => '2024-05-16 14:24:04',
            ),
            155 => 
            array (
                'id' => 156,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 14:24:06',
                'updated_at' => '2024-05-16 14:24:06',
            ),
            156 => 
            array (
                'id' => 157,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 14:25:45',
                'updated_at' => '2024-05-16 14:25:45',
            ),
            157 => 
            array (
                'id' => 158,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 14:25:55',
                'updated_at' => '2024-05-16 14:25:55',
            ),
            158 => 
            array (
                'id' => 159,
                'emoji_id' => '2',
                'emoji' => 'Frown',
                'created_at' => '2024-05-16 14:26:08',
                'updated_at' => '2024-05-16 14:26:08',
            ),
            159 => 
            array (
                'id' => 160,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 14:28:51',
                'updated_at' => '2024-05-16 14:28:51',
            ),
            160 => 
            array (
                'id' => 161,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 14:28:58',
                'updated_at' => '2024-05-16 14:28:58',
            ),
            161 => 
            array (
                'id' => 162,
                'emoji_id' => '1',
                'emoji' => 'Dead',
                'created_at' => '2024-05-16 14:29:07',
                'updated_at' => '2024-05-16 14:29:07',
            ),
            162 => 
            array (
                'id' => 163,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 14:29:15',
                'updated_at' => '2024-05-16 14:29:15',
            ),
            163 => 
            array (
                'id' => 164,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 15:36:11',
                'updated_at' => '2024-05-16 15:36:11',
            ),
            164 => 
            array (
                'id' => 165,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 15:36:34',
                'updated_at' => '2024-05-16 15:36:34',
            ),
            165 => 
            array (
                'id' => 166,
                'emoji_id' => '5',
                'emoji' => 'Happy',
                'created_at' => '2024-05-16 15:37:12',
                'updated_at' => '2024-05-16 15:37:12',
            ),
            166 => 
            array (
                'id' => 167,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 15:43:23',
                'updated_at' => '2024-05-16 15:43:23',
            ),
            167 => 
            array (
                'id' => 168,
                'emoji_id' => '3',
                'emoji' => 'Neutral',
                'created_at' => '2024-05-16 15:44:04',
                'updated_at' => '2024-05-16 15:44:04',
            ),
        ));
        
        
    }
}