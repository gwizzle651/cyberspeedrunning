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
                <a href="../dashboard.php">Back to dashboard</a>
                <h1>Login</h1>
                <form action="../assets/scripts/form-handler.php" method="post" accept-charset="utf-8">
                    <input type="hidden" name="form-id" value="login">
                    <label> 
                        Username
                        <input type="text" name="username" required maxlength="30">
                    </label>
                    <label>
                        Password
                        <input type="password" name="password" required autocomplete="off" maxlength="128">
                    </label>
                    <button type="submit">Login</button>
                </form> 
                <a href="register.php">Need an account?</a>
            </main>
        </div>
    </body>
</html>