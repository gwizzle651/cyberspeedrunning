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

        <title><?php echo $title; ?></title>
    </head>
    <body>
        <header>
            <?php include_once '../assets/partials/sidebar.php'; ?>
        </header>
    </body>
</html>