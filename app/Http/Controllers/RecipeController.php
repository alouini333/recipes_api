<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'picture' => 'required|image',
            'ingredients' => 'required|array',
            'ingredients.*.name' => 'required|string',
            'ingredients.*.unit' => 'required|in:g,kg,cl,L,lbs,tsp,gill,cup',
            'ingredients.*.units' => 'required|min:0',
        ]);

        $recipe = new Recipe();
        $recipe->fill($request->only(['name', 'description']));
        $recipe->picture = $request->picture->hashName();
        $recipe->picture = $request->picture->store('recipes');
        $recipe->save();

        foreach ($request->ingredients as $ingredient) {
            $newIngredient = new Ingredient();
            $newIngredient->name = $ingredient['name'];
            $newIngredient->unit = $ingredient['unit'];
            $newIngredient->units = $ingredient['units'];
            $newIngredient->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Recipe created with success'
        ]);
    }

    public function random()
    {
        try {
            $recipe = Recipe::with('ingredients')->get()->random();

            return response()->json([
                'status' => 'success',
                'data' => $recipe
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Something went wrong, pease try later'
            ], 500);
        }
    }
}
