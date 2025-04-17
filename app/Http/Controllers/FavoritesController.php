<?php


use App\Models\Favorite;

// Example function to add a recipe to favorites
public function addFavorite($recipeId)
{
    $user = auth()->user(); // Get the currently authenticated user

    // Check if the user has already favorited this recipe
    $favoriteExists = $user->favorites()->where('recipe_id', $recipeId)->exists();

    if ($favoriteExists) {
        return redirect()->back()->with('message', 'Recipe already in favorites!');
    }

    // Add to favorites
    Favorite::create([
        'user_id' => $user->id,
        'recipe_id' => $recipeId,
    ]);

    return redirect()->back()->with('message', 'Recipe added to favorites!');
}
