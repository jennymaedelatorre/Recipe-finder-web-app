@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Recipe Finder</h1>
    <form method="GET" action="/">
        <input type="text" name="search" placeholder="Search recipes" class="form-control">
        <button type="submit" class="btn btn-primary mt-2">Search</button>
    </form>

    <ul class="list-group mt-3">
        @foreach($recipes as $recipe)
            <li class="list-group-item">
                <a href="{{ url('/recipes/'.$recipe->id) }}">{{ $recipe->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
