<!DOCTYPE html>
<html>
    <head>
        <title>Recipe Collection 👨‍🍳</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
1        <script src="{{ asset('js/create.js') }}" defer></script>
    </head>
    <body>
        <header>
            <a href="{{route('recipes.index')}}"><h1>Recipe Collection 👨‍🍳</h1></a>
            <a href="{{route('recipes.create')}}"><button>Create</button></a>
        </header>

        <main> {{$slot}}</main>

        <footer>
            <p>Recipe Collection 👨‍🍳 is created by Emil Nielsen</p>
            <p>Used for Web Development 2026 - Software Engineering - SDU</p>
        </footer>
    </body>
</html>
