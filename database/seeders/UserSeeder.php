<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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

            ['name' => 'Pengurusan',
            'email' => 'ephjkr-pengurusan@email.com',
            'password' => Hash::make('password')],

            ['name' => 'Pentadbir',
            'email' => 'ephjkr-pentadbir@email.com',
            'password' => Hash::make('password')],   
            
            ['name' => 'Ketua Pasukan',
            'email' => 'ephjkr-ketua-pasukan@email.com',
            'password' => Hash::make('password')],  

            ['name' => 'Penolong Ketua Pasukan',
            'email' => 'ephjkr-penolong-ketua-pasukan@email.com',
            'password' => Hash::make('password')],        
            
            ['name' => 'Sekretariat',
            'email' => 'ephjkr-sekretariat@email.com',
            'password' => Hash::make('password')],  
            
            ['name' => 'Pemudah Cara',
            'email' => 'ephjkr-pemudah-cara@email.com',
            'password' => Hash::make('password')],    
            
            ['name' => 'Ketua Penilai',
            'email' => 'ephjkr-ketua-penilai@email.com',
            'password' => Hash::make('password')],
            
            ['name' => 'Penilai Jalan',
            'email' => 'ephjkr-penilai-jalan@email.com',
            'password' => Hash::make('password')],    

            ['name' => 'Penilai GPSS',
            'email' => 'ephjkr-penilai-gpss@email.com',
            'password' => Hash::make('password')],    

            ['name' => 'Ketua Validasi',
            'email' => 'ephjkr-ketua-validasi@email.com',
            'password' => Hash::make('password')],                
            
            ['name' => 'Pasukan Validasi',
            'email' => 'ephjkr-pasukan-validasi@email.com',
            'password' => Hash::make('password')],              

        ]);
    }
}
