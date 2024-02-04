<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function all_categories(): string
    {
        return Category::all()->toJson();
    }

    public function category($id)
    {
        return Category::find($id)->toJson();
    }

    public function add_category(Request $request): string
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:50'],
            'description' => ['required', 'max:150'],
        ]);
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];
        $category->save();
        return $category->toJson();
    }

    public function add_category_media(Request $request, Category $categories): string
    {
        $validatedData = $request->validate([
            'id' => ['required'],
            'image' => ['required'],
        ]);
        $category = $categories->all()->find($validatedData['id']);
        try {
            $category->addImage($request->file('image'));
        } catch (Exception $e) {
            Log::error('Failed to add media for category', $category->id);
            Log::error($e->getMessage());
        }
        Log::info('Category image added', ['id' => $category->id]);
        return response()->json(['message' => 'Category image added'], 200);
    }

    public function delete_category(Request $request): string
    {
        $category = Category::find($request->id);
        $category->delete();
        return response()->json(['message' => 'Category deleted'], 200);
    }
}
