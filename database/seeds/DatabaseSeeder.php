<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Meal::class, 5)->create();
        factory(App\Order::class, 5)->create();
        for ($j = 1; $j <= 5; $j++) {
            $num = rand(1, 7);
            for ($i = 1; $i <= $num; $i++) {
                $item = factory(App\Item::class)->make();
                $item->meal_id = rand(1, 5);
                $item->order_id = $j;
                $item->save();
            }
        }
    }
}
