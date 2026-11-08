<x-layout>
    <div class="surf-container">
        <h1>My Wishlist</h1>
        <ul class="recipes">
            @foreach($recipes as $recipe)
                <li class="item">
                    <p>{{ $recipe->name }}</p>
                    <a href="{{route('recipes.show', $recipe)}}"><button>👁️</button></a>
                    <form method="POST" action="{{ route('wishlist.destroy', $recipe) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">💔</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
