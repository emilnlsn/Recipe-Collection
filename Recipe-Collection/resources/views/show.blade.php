<x-layout>
    <h1 class="centered">{{$recipe->name}} <a href="{{route('recipes.edit', $recipe)}}"><button>✏️</button></a></h1>
    <div class="horizontal-stack">
        <div class="surf-container">
            <h2>Ingredients:</h2>
            <p>{{$recipe->ingredients}}</p>
        </div>
    </div>
</x-layout>
