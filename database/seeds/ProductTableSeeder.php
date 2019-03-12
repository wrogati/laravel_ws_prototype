<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Product')->delete();
        
        \DB::table('Product')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Monitor',
                'price' => 100.00,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Mouse',
                'price' => 9.90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Keyboard',
                'price' => 29.90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Table',
                'price' => 250.00,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));

    }
}