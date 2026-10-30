function ValidateRecipeForm(){
        let nameEmpty = document.getElementById('name').value.trim() === '';
        let ingredientsEmpty = document.getElementById('ingredients').value.trim() === '';

        document.getElementById('noNameAlert').textContent = nameEmpty ? "Please enter a name" : '';
        document.getElementById('noIngredentAlert').textContent = ingredientsEmpty ? "Please enter some ingredients" : '';

        return !(nameEmpty || ingredientsEmpty);
}
