<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    // Define the table name if it's not the default (in case you want to be explicit)
    protected $table = 'favorites';

    // Fillable attributes to avoid mass-assignment errors
    protected $fillable = ['user_id', 'recipe_id'];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Recipe model
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
