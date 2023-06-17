<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $food = Food::all();
        return response()->json($food);
    }

    public function store(Request $request)
    {
        $food = Food::create($request->all());
        return response()->json($food, 201);
    }

    public function show($id)
    {
        $food = Food::findOrFail($id);
        return response()->json($food);
    }

    public function update(Request $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->update($request->all());
        return response()->json($food);
    }

    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return response()->json(null, 204);
    }

    public function getByCategory($categoryId)
    {
        $foods = DB::table('food')
            ->join('categories', 'food.category_id', '=', 'categories.id')
            ->join('recipes', 'food.recipe_id', '=', 'recipes.id')
            ->select('food.*', 'categories.name as category_name', 'recipes.recipe')
            ->where('food.category_id', $categoryId)
            ->get();

        return response()->json($foods);
    }
}
