<!-- Page for testing partials -->
<?php
    $title = "Test Page";
    $category = "Dashboard";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import stylesheet -->
        <link rel="stylesheet" href="../assets/style/css/core.css">

        <title><?= $title; ?></title>
    </head>
    <body>
        <div class="">
            <div class="">
                <header class="">
                    <?php include_once '../assets/partials/sidebar.php';?>
                </header>
                <main class="">
                    
                </main>
            </div>
        </div>
    </body>
</html>