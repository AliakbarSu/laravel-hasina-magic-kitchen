<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\Orders;
use App\Models\User;
use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();

        $sampleFile = "https://res.cloudinary.com/dd1okznpy/image/upload/v1706832473/hasinaMagicKitchen/dish/ashak_36629_zo7qjj.jpg";
        AdminFactory::new()->create();

        $categories = Category::factory(3)->create()->each(function ($category) use ($sampleFile) {
            $category->attachRemoteMedia($sampleFile, ["folder" => "hasinaMagicKitchen/category", "overwrite" => false, "use_filename" => true, "unique_filename" => false]);
            $category->save();
            return $category;
        });

        $dishes = Dish::factory(4)->create([
            'category_id' => $categories->random(3)->first()->getAttribute('id'),
        ]);
        $dishes->each(function ($dish) use ($sampleFile) {
            $dish->attachRemoteMedia($sampleFile, ["folder" => "hasinaMagicKitchen/dish", "overwrite" => false, "use_filename" => true, "unique_filename" => false]);
            return $dish;
        });

        $menus = Menu::factory(3)
            ->create([
                'category_id' => $categories->random(3)->first()->getAttribute('id'),
            ])
            ->each(function ($menu) use ($dishes, $sampleFile) {
                $menu->dishes()->attach($dishes->random(rand(1, 3)));
                $menu->options()->attach($dishes->random(rand(1, 2)));
                $menu->attachRemoteMedia($sampleFile, ["folder" => "hasinaMagicKitchen/menu", "overwrite" => false, "use_filename" => true, "unique_filename" => false]);
                $menu->save();
                return $menu;
            });
        $menu_ids = $menus->pluck('id')->toArray();
        $orders = Orders::factory(3)
            ->create()
            ->each(function ($order) use ($menu_ids, $dishes) {
                foreach ($menu_ids as $key => $id) {
                    $order->items()->attach([
                        $id => [
                            'quantity' => rand(1, 3),
                        ],
                    ]);
                    $order
                        ->items()
                        ->each(function ($item) use ($dishes, $order) {
                            $dish_ids = $dishes
                                ->pluck('id')
                                ->random(1, 2)
                                ->toArray();
                            foreach ($dish_ids as $key => $id) {
                                $item->order_dishes()->attach([
                                    $id => [
                                        'order_id' => $order->id,
                                    ],
                                ]);
                            }
                        });
                }
                return $order;
            });
        $orders->each(function ($order) use ($dishes) {
            $dishes_ids = $dishes->pluck('id')->toArray();
            foreach ($dishes_ids as $key => $id) {
                $order->addons()->attach([
                    $id => ['quantity' => rand(1, 3)],
                ]);
            }
        });
    }
}
