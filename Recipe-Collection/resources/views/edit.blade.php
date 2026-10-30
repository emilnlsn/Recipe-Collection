<x-layout>
    <div class="surf-container">
        <h1>Edit recipe</h1>
        <form>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <p class="alert" id="noNameAlert"></p>
            <label for="ingredients">Ingredients:</label><br>
            <input type="text" id="ingredients" name="ingredients"><br>
            <p class="alert" id="noIngredentAlert"></p>
            <input type="submit" value="Submit">
        </form>
    </div>
</x-layout>