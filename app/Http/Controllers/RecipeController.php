<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $country = $request->input('area');

        
        $url = 'https://www.themealdb.com/api/json/v1/1/search.php?s=' . ($search ?? '');

        if ($country) {
            $url = 'https://www.themealdb.com/api/json/v1/1/filter.php?a=' . $country;
        }

        $response = Http::get($url);

        $meals = $response->json()['meals'] ?? [];

        $meals = collect($meals); 

        return view('recipes.index', compact('meals', 'search', 'country'));
    }

    public function show($id)
    {
        // Fetch recipe data from external API 
        $response = Http::get("https://www.themealdb.com/api/json/v1/1/lookup.php?i={$id}");

        // Check if the response has the 'meals' data
        $meal = $response->json()['meals'][0] ?? null;

        // If no meal found, throw a 404 error
        if (!$meal) {
            abort(404);
        }

        // Pass the meal data to the show view
        return view('recipes.show', compact('meal'));
    }
}
