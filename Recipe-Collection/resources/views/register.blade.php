<!DOCTYPE html>
<html>
    <head>
        <title>Recipe Collection 👨‍🍳</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    </head>
    <body>
        <header>
            <h1>Recipe Collection 👨‍🍳</h1>
        </header>

        <main>
            <div class="surf-container">
                <h1>Create Account</h1>
                <form onsubmit="return ValidateUser()">
                    <label for="Username">Username:</label><br>
                    <input type="text" id="Username" name="Username"><br>
                    <p class="alert" id="noUsernameAlert"></p>
                    <label for="Email">Email:</label><br>
                    <input type="text" id="Email" name="Email"><br>
                    <p class="alert" id="noEmailAlert"></p>
                    <label for="Password">Password:</label><br>
                    <input type="password" id="Password" name="Password"><br>
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
