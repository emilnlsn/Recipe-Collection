<x-layout>
    <div class="surf-container">
        <h1>Create recipe</h1>
        <form method="POST" action="{{route('recipes.update', $recipe)}}" onsubmit="return ValidateRecipeForm()">
            @csrf
            @method('PUT')


            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name', $recipe->name) }}"><br>
            <p class="alert" id="noNameAlert"></p>
            <label for="ingredients">Ingredients:</label><br>
            <input type="text" id="ingredients" name="ingredients" value="{{ old('ingredients', $recipe->ingredients) }}"><br>
            <p class="alert" id="noIngredientAlert"></p>
            <input type="submit" value="Submit">
        </form>
    </div>
</x-layout>

