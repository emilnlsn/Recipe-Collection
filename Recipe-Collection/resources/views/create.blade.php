<x-layout>
    <div class="surf-container">
        <h1>Create recipe</h1>
        <form method="POST" action="{{ route('recipes.store') }}" onsubmit="return ValidateRecipeForm()">
            @csrf

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
            <p class="alert" id="noNameAlert"></p>
            <label for="ingredients">Ingredients:</label><br>
            <input type="text" id="ingredients" name="ingredients" value="{{ old('ingredients') }}"><br>
            <p class="alert" id="noIngredientAlert"></p>
            <input type="submit" value="Submit">
        </form>
    </div>
</x-layout>
