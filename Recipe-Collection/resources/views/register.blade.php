<!DOCTYPE html>
<html>
    <head>
        <title>Recipe Collection 👨‍🍳</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <script defer src="{{asset('js/validations.js')}}"></script>
    </head>
    <body>
        <header>
            <h1>Recipe Collection 👨‍🍳</h1>
            <a href="{{route('login')}}"><button>Login</button></a>
        </header>

        <main>
            <div class="surf-container">
                <h1>Create Account</h1>
                <form method="POST" action="{{ route('register.store') }}" onsubmit="return ValidateUser()">
                    @csrf
                    <label for="name">Username:</label><br>
                    <input type="text" id="name" name="name"><br>
                    <p class="alert" id="noUsernameAlert"></p>
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <p class="alert" id="noEmailAlert"></p>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br>
                    <p class="alert" id="noPasswordAlert"></p>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </main>

        <footer>
            <p>Recipe Collection 👨‍🍳 is created by Emil Nielsen</p>
            <p>Used for Web Development 2026 - Software Engineering - SDU</p>
        </footer>
    </body>
</html>
