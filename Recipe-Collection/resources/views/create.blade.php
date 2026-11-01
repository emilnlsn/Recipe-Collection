<x-layout>
    <div class="surf-container">
        <h1>Create recipe</h1>
        <form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data" onsubmit="return ValidateRecipeForm()">
            @csrf

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
            <p class="alert" id="noNameAlert"></p>
            <label for="ingredients">Ingredients:</label><br>
            <input type="text" id="ingredients" name="ingredients" value="{{ old('ingredients') }}"><br>
            <p class="alert" id="noIngredientAlert"></p>
            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</x-layout>
