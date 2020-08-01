<?php

use App\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderStatus = new OrderStatus();
        $orderStatus->status = 'pending';
        $orderStatus->save();

        $orderStatus = new OrderStatus();
        $orderStatus->status = 'confirmed';
        $orderStatus->save();

        $orderStatus = new OrderStatus();
        $orderStatus->status = 'delivered';
        $orderStatus->save();

    }
}
