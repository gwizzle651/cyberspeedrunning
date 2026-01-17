<!-- Home page -->
<?php
    $title = "Dashboard | The Cyber Speedrunning Leaderboard";
    $category = "dashboard";
?>

<!doctype html>
<html lang="en" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import stylesheet -->
        <link rel="stylesheet" href="assets/style/css/main.css">

        <title><?= $title; ?></title>
    </head>
    <body>
        <div class="page-container">
            <header class="sidebar-col">
                <?php include_once 'assets/partials/sidebar.php';?>
            </header>
            <main class="main-col">
                <header class="header">
                    <h2 class="h2">Dashboard</h2>
                </header>
                <div class="text-box-m-centered">
                    <h3 class="h3-centered">Notice</h3>
                    <p class="em">
                        The Dashboard is a work in progress and is not ready yet. 
                        It will be implemented in the near future, but, for now, please navigate to the leaderboards page.
                    </p>
                </div>
            </main>
        </div>
    </body>
</html>