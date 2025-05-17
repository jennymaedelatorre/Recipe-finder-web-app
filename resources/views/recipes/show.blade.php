@extends('layouts.details')

@section('content')
<section class="py-2">
    <div class="details container">

        <div class="mt-4">
            <a href="{{ url('/#recipes') }}" class="btn btn-secondary">← Back to Recipes</a>
        </div>

        <h2 class="text-center fw-bold text-white">What’s on the Menu?</h2>
        <p class="text-white text-center mb-5" style="padding-left: 100px; padding-right: 100px">
            Ready to whip up something delicious? Check out all the yummy details below and turn this recipe into your next kitchen adventure!
            From the first stir to the final bite, we’ll guide you through every step of this scrumptious journey. 
        </p>
        <h1 class="mb-4 text-center fw-bold" style="font-family: 'Courier New', Courier, monospace; letter-spacing:4px;"><i>{{ $meal['strMeal'] }}</i></h1>

        <div class="row" id="recipe-cards">
            <div class="col-12 d-flex justify-content-center">
                <div class="card-recipe mb-3">
                    <img src="{{ $meal['strMealThumb'] }}" class="" alt="{{ $meal['strMeal'] }}">
                </div>
            </div>

            <div class="col-12 text-center justify-content-center mb-5">
                <div class="detail-card align-items-center" style="font-size: 1.1rem;">
                <span class="p-2"><strong>Category:</strong> {{ $meal['strCategory'] }}</span>
                <span class="p-2"><strong>Area:</strong> {{ $meal['strArea'] }}</span>
                <span class="p-2"><strong>Tags:</strong> {{ $meal['strTags'] ?? 'None' }}</span>
                <span class="p-2"><strong>Youtube Link:</strong>
                    @if($meal['strYoutube'])
                    <a style="color:#e68900; text-decoration:none" href="{{ $meal['strYoutube'] }}" target="_blank">{{ $meal['strMeal'] }}</a>
                    @else
                    Not Available
                    @endif
                </span>
                </div>
            </div>
        </div>

        <!-- Instructions -->
        <div class="mt-4">
            <h4 style="color:#e68900">Instructions : </h4>
            <p>{{ $meal['strInstructions'] }}</p>
        </div>

        <!-- Ingredients -->
        <div class="mt-4">
            <h4 style="color: #e68900;">Ingredients : </h4>
            <ul>
                @for ($i = 1; $i <= 20; $i++)
                    @php
                    $ingredient = $meal["strIngredient{$i}"];
                    $measure = $meal["strMeasure{$i}"];
                    @endphp
                    @if ($ingredient && $ingredient !== "")
                        <li>{{ $ingredient }} - {{ $measure }}</li>
                    @endif
                @endfor
            </ul>
        </div>

        <div class="mt-4">
            <a href="#" class="btn btn-secondary"> Back to top</a>
        </div>
    </div>
</section>
@endsection
