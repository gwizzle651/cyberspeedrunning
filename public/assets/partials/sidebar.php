<!-- Partial for the sidebar header used across the site -->
<?php
    // Set fallback values for vars if they are not set in the including file
    $category = $category ?? "Unknown";

    // TODO: get login status
?>

<div class="d-flex flex-column w-100 h-100 border-end-5 bg-dark-subtle">
    <header class="py-3">
        <h1 class="text-center lh-base fw-semibold">The Cyber Speedrunning Leaderboard</h1>
    </header>

    <nav class="d-flex flex-column h4 ms-3">
    <!-- TODO: add actual links -->
        <a class="my-2">Dashboard</a>
        <a class="my-2">Leaderboard</a>
        <a class="my-2">Help</a>
    </nav>

    <footer class="mt-auto">
    <!-- TODO: check login status and display user profile -->
        <a>Login</a>
    </footer>
</div>