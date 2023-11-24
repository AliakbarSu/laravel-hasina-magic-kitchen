<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DishController extends Controller
{
    public function all_dishes(Dish $dishes)
    {
        return $dishes->get_menus_with_media();
    }
    public function dish($id)
    {
        return Dish::with(['category', 'menus'])
            ->find($id)
            ->toJson();
    }

    public function add_dish(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
        ]);
        $dish = new Dish();
        $dish->name = $validatedData['name'];
        $dish->description = $validatedData['description'];
        $dish->price = $validatedData['price'];
        $dish->category_id = $validatedData['category'];
        $dish->save();
        Log::info('Dish created', ['dish' => $dish->name, 'id' => $dish->id]);
        return $dish->toJson();
    }

    public function add_dish_media(Request $request, Dish $dishes)
    {
        $validatedData = $request->validate([
            'id' => ['required'],
            'image' => ['required'],
        ]);
        $dish = $dishes->all()->find($validatedData['id']);
        $dish->attachMedia($request->file('image'));
        Log::info('Dish media added', ['id' => $dish->id]);
        return response()->json(['message' => 'Dish media added'], 200);
    }

    public function delete_dish(Request $request)
    {
        $dish = Dish::find($request->id);
        $dish->delete();
        Log::info('Dish deleted', ['id' => $dish->id]);
        return response()->json(['message' => 'Dish deleted'], 200);
    }
}
