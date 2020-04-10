<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Kiwanis Fair - Login</title>

        <link href="login.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <!-- still need the logo image -->
            <img src="images/kiawanis-fair.jpeg" alt="Kiwanis Logo">
        </header>

        <section>
            <form action="main.html">
                <fieldset>
                    <legend>Management Login</legend>

                    <label for="userEmail">E-mail</label>
                    <input type="email" name="Email" id="userEmail">

                    <label for="userPassword">Password</label>
                    <input type="text" name="Password" id="userPassword">

                    <section id="submitButtons">
                        <input type="submit" value="Login" class="submission">
                    </section>
                </fieldset>
            </form>
            <br>
        </section>
    </body>
</html>
