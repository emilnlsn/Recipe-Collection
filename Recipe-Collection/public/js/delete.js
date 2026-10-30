window.addEventListener("load", () => {
    const list = document.querySelector('.recipes');

    list.addEventListener('click', (e) => {
        const btn = e.target.closest('.delete');
        if (btn) {
            btn.closest('.item').remove();
        }
    });
});

function DeleteRecipe ()
{
    const list = document.querySelector('.recipes');

    list.addEventListener('click', (e) => {
        const btn = e.target.closest('.delete');
        if (btn) {
            btn.closest('.item').remove();
        }
    });
}