<!-- Partial for the sidebar header used across the site -->
<?php
    // Set fallback values for vars if they are not set in the including file
    $category = $category ?? "unknown";

    // TODO: get login status
?>

<div class="sidebar">
    <header class="header">
        <h1 class="h1-centered">The Cyber Speedrunning Leaderboard</h1>
    </header>
    <!-- TODO: make current location have highlight border -->
    <nav class="nav-menu-v">
        <a href="https://bingleton.org/dashboard.php" class="h4">Dashboard</a>
        <a href="https://bingleton.org/leaderboards.php" class="h4">Leaderboards</a>
        <a href="https://bingleton.org/help.php" class="h4">Help</a>
    </nav>

    <footer class="footer">
    <!-- TODO: check login status and display user profile -->
        <a href="https://bingleton.org/account/login.php" class="button-l-highlight h4-centered w-100">Login</a>
    </footer>
</div>