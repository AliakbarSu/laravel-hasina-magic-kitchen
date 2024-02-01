<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use MediaAlly;
    use HasFactory;
    use HasUuids;

    protected $fillable = ['name', 'description', 'price'];

    public function get_menus_with_media()
    {
        return $this->with(['dishes', 'options', 'category'])
            ->get()
            ->each(function ($item) {
                $item->media = $this->add_media($item);
                $item->dishes->each(function ($dish) {
                    $dish->makeHidden('pivot');
                    $dish->media = $this->add_media($dish);
                });
                $item->options->each(function ($option) {
                    $option->makeHidden('pivot');
                    $option->media = $this->add_media($option);
                });
            });
    }

    private function add_media($item)
    {
        return array_map(function ($media) {
            return [
                'id' => $media['id'],
                'url' => $media['file_url'],
            ];
        }, $item->fetchAllMedia()->toArray());
    }

    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'dish_menu');
    }

    public function order_dishes()
    {
        return $this->belongsToMany(Dish::class, 'dish_menu_order');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function options()
    {
        return $this->belongsToMany(Dish::class, 'menu_options');
    }
}
