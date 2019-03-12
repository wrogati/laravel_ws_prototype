<?php

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
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Administrator',
                'email' => 'administrator@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RxCsCrhu3vmk9myRfTd4Eu5UvZmDE81.0n56q5Nmg9altD8vY2Iu6',
                'remember_token' => '41myoVa380RXzfQcjjtXVOHnFA48UkBRSUqo3rwox62XQExCkseW9Xxva7yq',
                'created_at' => '2019-03-11 21:47:14',
                'updated_at' => '2019-03-11 21:47:14',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Sales Agent',
                'email' => 'sales.agent@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RxCsCrhu3vmk9myRfTd4Eu5UvZmDE81.0n56q5Nmg9altD8vY2Iu6',
                'remember_token' => '41myoVa380RXzfQcjjtXVOHnFA48UkBRSUqo3rwox62XQExCkseW9Xxva7yq',
                'created_at' => '2019-03-11 22:15:06',
                'updated_at' => '2019-03-11 22:15:06',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Customer',
                'email' => 'customer@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RxCsCrhu3vmk9myRfTd4Eu5UvZmDE81.0n56q5Nmg9altD8vY2Iu6',
                'remember_token' => '41myoVa380RXzfQcjjtXVOHnFA48UkBRSUqo3rwox62XQExCkseW9Xxva7yq',
                'created_at' => '2019-03-11 22:15:06',
                'updated_at' => '2019-03-11 22:15:06',
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Manager',
                'email' => 'manager@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RxCsCrhu3vmk9myRfTd4Eu5UvZmDE81.0n56q5Nmg9altD8vY2Iu6',
                'remember_token' => '41myoVa380RXzfQcjjtXVOHnFA48UkBRSUqo3rwox62XQExCkseW9Xxva7yq',
                'created_at' => '2019-03-11 22:15:06',
                'updated_at' => '2019-03-11 22:15:06',
            ),
        ));
        
        
    }
}