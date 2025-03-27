@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Recipe</h1>
    <form action="/recipes" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea name="ingredients" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea name="instructions" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Recipe</button>
    </form>
</div>
@endsection
