@extends('layouts.app')

@section('content')
<section id="recipes" class="recipe-section py-5 bg-light" style="margin-top: 50px;">
    <div class="container">
        <h2 class="text-center fw-bold text-white">Explore Delicious Recipes</h2>
        <p class="text-white text-center mb-5 pe-5 ps-5">
            Explore a world of flavors with our handpicked collection of mouthwatering recipes.
            From classic favorites to new culinary inspirations, find the perfect dish to satisfy your cravings.
            Start your cooking journey today!
        </p>

        <!-- Search Bar & Filter -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                <form method="GET" action="{{ route('recipes.index') }}" class="d-flex flex-wrap gap-1 justify-content-center align-items-center">
                    <input type="text" name="search" class="form-control w-50" placeholder="Search for a recipe..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-search">Search</button>

                    <select name="area" onchange="this.form.submit()" class="form-select w-auto">
                        <option value="">All Countries</option>
                        <option value="Filipino" {{ request('area') == 'Filipino' ? 'selected' : '' }}>Filipino</option>
                        <option value="Italian" {{ request('area') == 'Italian' ? 'selected' : '' }}>Italian</option>
                        <option value="French" {{ request('area') == 'French' ? 'selected' : '' }}>French</option>
                        <option value="Japanese" {{ request('area') == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                        <option value="Chinese" {{ request('area') == 'Chinese' ? 'selected' : '' }}>Chinese</option>
                        <option value="Korean" {{ request('area') == 'Korean' ? 'selected' : '' }}>Korean</option>
                        <option value="Spanish" {{ request('area') == 'Spanish' ? 'selected' : '' }}>Spanish</option>
                        <option value="Indian" {{ request('area') == 'Indian' ? 'selected' : '' }}>Indian</option>
                    </select>
                </form>
            </div>
        </div>

        <!-- Recipe Cards -->
        <div class="row justify-content-center" id="recipe-cards">
            <!-- first 9 recipes  -->
            @foreach ($meals->take(9) as $meal)
                <div class="col-md-4 py-2" class="recipe-card">
                    <div class="card-recipe">
                        <img src="{{ $meal['strMealThumb'] }}" class="img-fluid" alt="{{ $meal['strMeal'] }}">
                        <div class="overlay">
                            <h3>{{ $meal['strMeal'] }}</h3>
                            <span class="fw-bold">Click below to see Instructions</span>
                            <span class="text-white"><strong>Category:</strong> {{ $meal['strCategory'] }}</span>
                            <span class="text-white"><strong>Area:</strong> {{ $meal['strArea'] }}</span>
                            <a href="{{ route('recipes.show', $meal['idMeal']) }}" class="btn btn-warning btn-sm">View Recipe</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

         <!-- Additional Recipe Cards (Hidden initially) -->
         <div class="row justify-content-center" id="extra-recipes" style="display: none;">
            @foreach ($meals->skip(9)->take(6) as $meal)
                <div class="col-md-4 py-2" class="recipe-card">
                    <div class="card-recipe">
                        <img src="{{ $meal['strMealThumb'] }}" class="img-fluid" alt="{{ $meal['strMeal'] }}">
                        <div class="overlay">
                            <h3>{{ $meal['strMeal'] }}</h3>
                            <span class="fw-bold">Click below to see Instructions</span>
                            <span class="text-white"><strong>Category:</strong> {{ $meal['strCategory'] }}</span>
                            <span class="text-white"><strong>Area:</strong> {{ $meal['strArea'] }}</span>
                            <a href="{{ route('recipes.show', $meal['idMeal']) }}" class="btn btn-warning btn-sm">View Recipe</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- See More Button -->
        <div class="text-center mt-4">
            <button id="see-more-btn" class="btn" style="color: white; background-color: #e68900">See More</button>
        </div>

    </div>
</section>

@section('scripts')
<script>
    document.getElementById('see-more-btn').addEventListener('click', function() {
        var extraRecipes = document.getElementById('extra-recipes');
        var seeMoreBtn = document.getElementById('see-more-btn');
        
        console.log('Button clicked'); 
        
        if (extraRecipes.style.display === 'none') {
            extraRecipes.style.display = 'flex'; 
            seeMoreBtn.innerText = 'See Less'; 
        } else {
            extraRecipes.style.display = 'none'; 
            seeMoreBtn.innerText = 'See More';
        }
    });
</script>

@endsection

@endsection
