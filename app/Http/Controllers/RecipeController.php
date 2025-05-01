<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RecipeController extends Controller
{

    public function index(Request $request)
{
    $search = $request->input('search');
    $country = $request->input('area');
    $meals = collect();

    // Cache key based on search and country
    $cacheKey = 'meals_' . md5($search . $country);

    // Check if meals are already cached
    $meals = Cache::remember($cacheKey, 300, function () use ($search, $country) {
        if ($search) {
            $url = 'https://www.themealdb.com/api/json/v1/1/search.php?s=' . $search;
            $response = Http::get($url);
            $meals = collect($response->json()['meals'] ?? []);
            
            if ($country) {
                $meals = $meals->filter(fn($meal) => $meal['strArea'] === $country)->values();
            }

        } elseif ($country) {
            // Get list of meals with IDs only
            $url = 'https://www.themealdb.com/api/json/v1/1/filter.php?a=' . $country;
            $response = Http::get($url);
            $mealList = collect($response->json()['meals'] ?? []);

            // Limit to first 9 meals
            $mealList = $mealList->take(9);

            // Fetch full details for each
            $meals = $mealList->map(function ($meal) {
                $detailRes = Http::get("https://www.themealdb.com/api/json/v1/1/lookup.php?i={$meal['idMeal']}");
                return $detailRes->json()['meals'][0] ?? null;
            })->filter();
        } else {
            $url = 'https://www.themealdb.com/api/json/v1/1/search.php?s=';
            $response = Http::get($url);
            $meals = collect($response->json()['meals'] ?? []);
        }
        return $meals;
    });

    if ($request->ajax()) {
        return view('partials.recipes', compact('meals'))->render();
    }

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
