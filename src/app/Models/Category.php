<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use HasUuids;
    use MediaAlly;

    protected $fillable = ['name', 'description'];

    public function get_all_categories()
    {
        return $this->all()->each(function ($item) {
            $item->media = $this->add_media($item);
        });
    }

    private function add_media($item): array
    {
        return array_map(function ($media) {
            return [
                'id' => $media['id'],
                'url' => $media['file_url'],
            ];
        }, $item->fetchAllMedia()->toArray());
    }
    

    public function addImage($image): void
    {
        $this->attachMedia($image, ["folder" => "hasinaMagicKitchen/category", "overwrite" => false, "use_filename" => true, "unique_filename" => false]);
    }

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class);
    }
}
