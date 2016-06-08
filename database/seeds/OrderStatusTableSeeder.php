<?php
use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('order_statuses')->truncate();
        // 1
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Unknown'
        ]);
        // 2
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Pending'
        ]);
        // 3
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Paid'
        ]);
        // 4
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Declined'
        ]);
        // 5
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Shipped'
        ]);
        // 6
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Authorized'
        ]);
        // 7
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Cancelled'
        ]);
        // 8
        factory('CodeCommerce\OrderStatus')->create([
            'name' => 'Deleted'
        ]);
    }
}
