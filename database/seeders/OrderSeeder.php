<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $orders = [
            [
                'id' => 2367,
                'user_id' => $user->id,
                'customer_name' => 'Juan Dela Cruz',
                'customer_address' => 'Digos City',
                'total_price' => 550.00,
                'payment_method' => 'GCash',
                'status' => 'Delivered',
                'created_at' => '2026-07-01 09:00:00',
            ],
            [
                'id' => 2368,
                'user_id' => $user->id,
                'customer_name' => 'Maria Santos',
                'customer_address' => 'Davao City',
                'total_price' => 325.00,
                'payment_method' => 'Cash',
                'status' => 'Processing',
                'created_at' => '2026-07-02 10:30:00',
            ],
        ];

        foreach ($orders as $orderData) {
            $order = Order::updateOrCreate(['id' => $orderData['id']], $orderData);

            if ($orderData['id'] == 2367) {
                // Juan Dela Cruz total: 550. E.g. Dragon Fruit (150) * 2 + Honey (250) * 1 = 550
                OrderItem::updateOrCreate(
                    ['order_id' => $order->id, 'product_id' => 1],
                    ['quantity' => 2, 'price' => 150.00]
                );
                OrderItem::updateOrCreate(
                    ['order_id' => $order->id, 'product_id' => 3],
                    ['quantity' => 1, 'price' => 250.00]
                );
            } elseif ($orderData['id'] == 2368) {
                // Maria Santos total: 325. E.g. Mango (120) * 2 + Banana (75) * 1 + Tomato (10) * 1? Wait, Banana (75), Tomato (60)
                // Tomato (60) * 1 + Banana (75) * 1 + Mango (120) * 1? Total = 255.
                // Let's do: Mango (120) * 2 + Banana (75) * 1 + Tomato (10) * 1? Let's just do:
                // Mango (120) * 2 = 240, Banana (75) * 1 = 75, Tomato (60) * 0? Wait, 240 + 75 = 315.
                // Let's do Tomato (60) * 1 + Mango (120) * 1 + Grapes (220) * 0?
                // Let's just do Banana (75) * 1 = 75, Honey (250) * 1 = 250. Total = 325! Perfect!
                OrderItem::updateOrCreate(
                    ['order_id' => $order->id, 'product_id' => 5],
                    ['quantity' => 1, 'price' => 75.00]
                );
                OrderItem::updateOrCreate(
                    ['order_id' => $order->id, 'product_id' => 3],
                    ['quantity' => 1, 'price' => 250.00]
                );
            }
        }
    }
}
