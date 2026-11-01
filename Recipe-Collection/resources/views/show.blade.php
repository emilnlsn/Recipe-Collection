<x-layout>
    <h1 class="centered">{{$recipe->name}} <a href="{{route('recipes.edit', $recipe)}}"><button>✏️</button></a></h1>
    <div class="horizontal-stack">
        <div class="surf-container">
            <h2>Ingredients:</h2>
            <p>{{$recipe->ingredients}}</p>
        </div>
        @if($imageUrl)
            <div class="surf-container">
                <img width="500" height="500" src="{{ $imageUrl }}" alt="{{ $recipe->name }}">
            </div>
        @endif
    </div>
</x-layout>
