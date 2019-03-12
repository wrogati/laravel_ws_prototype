<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Order')->delete();
        
        \DB::table('Order')->insert(array (
            0 => 
            array (
                'id' => '1',
                'product_id' => '1',
                'customer_id' => '3',
                'quantity' => '2',
                'sales_agent_id' => 2,
                'status' => 'Open',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'product_id' => '2',
                'customer_id' => '3',
                'quantity' => '3',
                'sales_agent_id' => 2,
                'status' => 'Open',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'product_id' => '3',
                'customer_id' => '3',
                'quantity' => '6',
                'sales_agent_id' => 2,
                'status' => 'Sold',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'product_id' => '4',
                'customer_id' => '3',
                'quantity' => '2',
                'sales_agent_id' => 2,
                'status' => 'Open',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'product_id' => '4',
                'customer_id' => '3',
                'quantity' => '4',
                'status' => 'Sold',
                'sales_agent_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}