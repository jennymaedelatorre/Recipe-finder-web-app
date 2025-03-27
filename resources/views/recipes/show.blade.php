@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $recipe->name }}</h1>
    <h3>Ingredients:</h3>
    <p>{{ $recipe->ingredients }}</p>
    <h3>Instructions:</h3>
    <p>{{ $recipe->instructions }}</p>
    <a href="/" class="btn btn-secondary">Back</a>
</div>
@endsection
