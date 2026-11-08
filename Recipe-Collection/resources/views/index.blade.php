<x-layout>
    <div class="surf-container">
        <h1>All recipes</h1>
        <ul class="recipes">
            @foreach($recipes as $recipe)
                <li class="item">
                    <p>{{ $recipe->name }}</p>
                    <a href="{{route('recipes.show', $recipe)}}"><button>👁️</button></a>
                    <a href="{{route('recipes.edit', $recipe)}}"><button>✏️</button></a>
                    @if(in_array($recipe->id, $wishlistIds))
                        <form method="POST" action="{{ route('wishlist.destroy', $recipe) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">💔</button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('wishlist.store', $recipe) }}">
                            @csrf
                            <button type="submit">❤️</button>
                        </form>
                    @endif
                    <form method="POST" action="{{ route('recipes.destroy', $recipe) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" >🗑️</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
