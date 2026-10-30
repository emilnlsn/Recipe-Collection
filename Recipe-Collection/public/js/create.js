window.addEventListener("load", e=> {
    let form = document.querySelector('form');
    form.addEventListener('submit', (e) => {

        let nameEmpty = document.getElementById('name').value.trim() === '';
        let ingredientsEmpty = document.getElementById('ingredients').value.trim() === '';

        document.getElementById('noNameAlert').textContent = nameEmpty ? "Please enter a name" : '';
        document.getElementById('noIngredentAlert').textContent = ingredientsEmpty ? "Please enter some ingredients" : '';

        if (nameEmpty || ingredientsEmpty) {
            e.preventDefault();
        }
    });
});

