<!-- Login page -->
<?php
    $title = "Login | The Cyber Speedrunning Leaderboard";
?>

<!doctype html>
<html lang="en" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import stylesheet -->
        <link rel="stylesheet" href="../assets/style/css/main.css">

        <title><?= $title; ?></title>
    </head>
    <body>
        <div class="page-container">
            <main class="">
                <a href="https://bingleton.org">Back to home</a>
                <h1>Login</h1>
                <label> 
                    Username:
                    <input type="text" name="username" required>
                </label>
                <label>
                    Password:
                    <input type="password" name="password" required>
                </label>
                <button type="button">Login</button>
                <a href="https://bingleton.org/account/create.php">Need an account?</a>
            </main>
        </div>
    </body>
</html>