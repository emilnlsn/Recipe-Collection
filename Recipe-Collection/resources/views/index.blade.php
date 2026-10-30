<x-layout>
    <div class="surf-container">
        <h1>All recipes</h1>
        <ul class="recipes">
            @foreach($recipes as $recipe)
                <li class="item">
                    <p>{{ $recipe->name }}</p>
                    <a href="pages/show.html"><button>👁️</button></a>
                    <a href="pages/edit.html"><button>✏️</button></a>
                    <button class="delete">🗑️</button>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
