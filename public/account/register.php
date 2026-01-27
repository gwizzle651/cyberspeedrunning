<!-- Register page -->
<?php
    $title = "Register | The Cyber Speedrunning Leaderboard";
?>

<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Import main stylesheet -->
    <link rel="stylesheet" href="../assets/style/css/main.css">

    <title><?= $title; ?></title>
</head>

<body>

<div class="page-container">

    <main class="auth-container">

        <a href="../dashboard.php" class="back-link">← Back to dashboard</a>

        <div class="auth-card">

            <h1>Register</h1>

            <form action="../assets/scripts/form-handler.php" method="post" accept-charset="utf-8">

                <input type="hidden" name="form-id" value="register">

                <label>
                    Username
                    <input type="text"
                           name="username"
                           required
                           maxlength="30"
                           pattern="^[a-zA-Z0-9_\-\.]+$">
                </label>

                <label>
                    Password
                    <input type="password"
                           name="password"
                           required
                           autocomplete="off"
                           minlength="8"
                           maxlength="128">
                </label>

                <label>
                    Confirm Password
                    <input type="password"
                           name="confirm-password"
                           required
                           autocomplete="off"
                           minlength="8"
                           maxlength="128">
                </label>

                <button type="submit" class="btn-primary">
                    Register
                </button>

            </form>

            <div class="auth-footer">
                <p>
                    Already have an account?
                    <a href="login.php">Login here</a>
                </p>
            </div>

        </div>

    </main>

</div>

</body>
</html>
