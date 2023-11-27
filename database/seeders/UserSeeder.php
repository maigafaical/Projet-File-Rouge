<?php

 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'MAIGA FAICAL',
            'username' => 'faicalmaiga',
            'email' =>'faicalmaiga78@gmail.com',
            'username' => 'faicalmaiga',

            'roles_id' => 1,
            'password' => Hash::make('Faical54@'),
            ]);


            DB::table('users')->insert([
                'name' => 'MAIGA DJAFAR',
                'username' => 'djafar',
                'email' =>'djafar@gmail.com',
                'username' => 'djafar',
                
                'roles_id' => 2,
                'password' => Hash::make('youssouf@'),
                ]);

                DB::table('users')->insert([
                    'name' => 'MAIGA YOUSSOUF',
                    'username' => 'youssouf',
                    'email' =>'youssouf@gmail.com',
                    'username' => 'youssouf',
                    
                    'roles_id' => 3,
                    'password' => Hash::make('youssouf@'),
                    ]);    
    }
}
