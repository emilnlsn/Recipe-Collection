<!DOCTYPE html>
<html>
    <head>
        <title>Recipe Collection 👨‍🍳</title>
        <link rel="stylesheet" href="css\styles.css">
        <script src="delete.js" defer></script>
    </head>
    <body>
        <header>
            <a href="index.html"><h1>Recipe Collection 👨‍🍳</h1></a>
            <a href="pages/create.html"><button>Create</button></a>
        </header>

        <main> {{$slot}}</main>

        <footer>
            <p>Recipe Collection 👨‍🍳 is created by Emil Nielsen</p>
            <p>Used for Web Development 2026 - Software Engineering - SDU</p>
        </footer>
    </body>
</html>
