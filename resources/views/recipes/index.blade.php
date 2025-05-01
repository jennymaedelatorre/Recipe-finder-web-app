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

                    <select name="area" class="form-select w-auto">
                        <option value="">All Countries</option>
                        <option value="Filipino" {{ request('area') == 'Filipino' ? 'selected' : '' }}>Filipino</option>
                        <option value="Italian" {{ request('area') == 'Italian' ? 'selected' : '' }}>Italian</option>
                        <option value="French" {{ request('area') == 'French' ? 'selected' : '' }}>French</option>
                        <option value="Japanese" {{ request('area') == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                        <option value="Chinese" {{ request('area') == 'Chinese' ? 'selected' : '' }}>Chinese</option>
                        <option value="Mexican" {{ request('area') == 'Mexican' ? 'selected' : '' }}>Mexican</option>
                        <option value="Canadian" {{ request('area') == 'Canadian' ? 'selected' : '' }}>Canadian</option>
                        <option value="Indian" {{ request('area') == 'Indian' ? 'selected' : '' }}>Indian</option>
                    </select>
                </form>
            </div>
        </div>

        <!-- Recipe Cards -->

        <div id="loader" style="display: none; padding-bottom:150px " class="text-center my-5">
            <div class="spinner-border text-warning" role="status" style="width: 3rem; height: 3rem;">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-3 text-white">Fetching delicious recipes... it may take a few moments. 🍽️</p>
        </div>



        <div class="row justify-content-center" id="recipe-cards">
            @include('partials.recipes', ['meals' => $meals])
        </div>

        <!-- See More Button -->
        <!-- <div class="text-center mt-4">
            <button id="see-more-btn" class="btn" style="color: white; background-color: #e68900">See More</button>
        </div> -->

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
<script>
    const searchInput = document.querySelector('input[name="search"]');
    const areaSelect = document.querySelector('select[name="area"]');
    const recipeCards = document.getElementById('recipe-cards');
    const loader = document.getElementById('loader');

    let debounceTimer;

    function fetchRecipes() {
        const query = searchInput.value;
        const area = areaSelect.value;

        // Show loader, hide cards
        loader.style.display = 'block';
        recipeCards.style.display = 'none';

        fetch(`{{ route('recipes.index') }}?search=${encodeURIComponent(query)}&area=${encodeURIComponent(area)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(res => res.text())
            .then(html => {
                recipeCards.innerHTML = html;
                recipeCards.style.display = 'flex'; 
                loader.style.display = 'none';
            })
            .catch(() => {
                loader.innerHTML = "<p class='text-danger'>Something went wrong. Try again.</p>";
            });
    }

    searchInput.addEventListener('input', function () {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(fetchRecipes, 500);
    });

    areaSelect.addEventListener('change', fetchRecipes);
</script>




@endsection

@endsection