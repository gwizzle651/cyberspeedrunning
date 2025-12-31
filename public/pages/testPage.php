<!-- Page for testing partials -->
<?php
    $title = "Test Page";
    $category = "Dashboard";
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import stylesheet -->
        <link rel="stylesheet" href="../assets/style/css/style.css">

        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div class="container-fluid vh-100">
            <div class="row g-0 h-100">
                <header class="col-2-5 h-100">
                    <?php include_once '../assets/partials/sidebar.php'; ?>
                </header>
                <main class="col-9-5 h-100">
                    
                </main>
            </div>
        </div>
    </body>
</html>