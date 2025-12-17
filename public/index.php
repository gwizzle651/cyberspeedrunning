<?php
// PHP code can go here
$title = "super epic cyber speedrunning site";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/style/style.css">
    <script>
        function greetUser() {
            alert("get out of my swamp");
            
        }
    </script>
    <style>
        #myImage {
            display: none;
            width: 300px;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <button onclick="showScaryImage()">dont click me; you will get really scared</button>
    <img src="/assets/images/scaryImage.jpg">
</body>
</html>
