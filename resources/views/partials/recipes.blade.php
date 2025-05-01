@if ($meals->isEmpty())
    <div class="text-center text-white fw-bold py-5" style="margin-bottom: 160px;">
        @if (request('search') && request('area'))
            No recipes found for "{{ request('search') }}" in {{ request('area') }} cuisine.
        @elseif (request('search'))
            No recipes found for "{{ request('search') }}".
        @elseif (request('area'))
            No recipes found in {{ request('area') }} cuisine.
        @else
            No recipes found.
        @endif
    </div>
@else
@foreach ($meals->take(9) as $meal)
    <div class="col-md-4 py-2">
        <div class="card-recipe">
            <img src="{{ $meal['strMealThumb'] }}" class="img-fluid" alt="{{ $meal['strMeal'] }}">
            <div class="overlay">
                <h3>{{ $meal['strMeal'] }}</h3>
                <span class="fw-bold">Click below to see Instructions</span>

                <!-- Check if strCategory exists and is not empty -->
                <span class="text-white"><strong>Category:</strong> 
                    {{ $meal['strCategory'] ?? 'N/A' }}
                </span>

                <!-- Check if strArea exists and is not empty -->
                <span class="text-white"><strong>Area:</strong> 
                    {{ $meal['strArea'] ?? 'N/A' }}
                </span>

                <a href="{{ route('recipes.show', $meal['idMeal']) }}" class="btn btn-warning btn-sm">View Recipe</a>
            </div>
        </div>
    </div>
@endforeach

@endif
