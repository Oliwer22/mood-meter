<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->delete();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Oliwer',
                'email' => 'admin@roc.nl',
                'password' => '$2y$10$ORN.2ItF.WHdMjsxl6stDOWfDZ04DU9b/o85lz1hPMMCGxLreCdxW',
                'role' => 'Admin',
                'last_login' => '2024-04-10 20:09:21',
                'created_at' => '2024-02-24 21:35:59',
                'updated_at' => '2024-02-24 21:35:59',
            ),
        ));
        
        
    }
}