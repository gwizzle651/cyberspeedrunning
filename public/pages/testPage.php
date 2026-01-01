<!-- Page for testing partials -->
<?php
    $title = "Test Page";
    $category = "Dashboard";
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
        <div class="full-page-row">
            <header class="sidebar-col">
                <?php include_once '../assets/partials/sidebar.php';?>
            </header>
            <main class="">
                
            </main>
        </div>
    </body>
</html>