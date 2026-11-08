function ValidateRecipeForm(){
        let nameEmpty = document.getElementById('name').value.trim() === '';
        let ingredientsEmpty = document.getElementById('ingredients').value.trim() === '';

        document.getElementById('noNameAlert').textContent = nameEmpty ? "Please enter a name" : '';
        document.getElementById('noIngredientAlert').textContent = ingredientsEmpty ? "Please enter some ingredients" : '';

        return !(nameEmpty || ingredientsEmpty);
}

function ValidateUser(){
    let usernameEmpty = document.getElementById('Username').value.trim() === '';
    let password = document.getElementById('Password');
    let passwordToSmall = password.value.length <= 8;
    let passwordEmpty = password.value.trim() === '';
    let emailEmpty = document.getElementById('Email').value.trim() === '';

    document.getElementById('noUsernameAlert').textContent = usernameEmpty ? "Please enter a name" : '';
    document.getElementById('noPasswordAlert').textContent = (passwordEmpty || passwordToSmall) ? "Please enter a password longer than 8 characters" : '';
    document.getElementById('noEmailAlert').textContent = usernameEmpty ? "Please enter a email" : '';

    return !(usernameEmpty || emailEmpty || passwordEmpty || passwordToSmall);
}
