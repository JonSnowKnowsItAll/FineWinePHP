<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<!-- including navbar here-->
<?php require_once 'navbar.php'?>
<main class="container">
    <div class="container p-5 my-5 border bg-light">
        <!-- including db connection config, outsourced functions.php and pages -->
        <?php
        include 'config.php';
        include 'functions.php';
        if (isset($_GET['menu']))
        {
            switch ($_GET['menu'])
            {
                case 'form':
                    include 'form.php';
                    break;
                case 'view':
                    include 'view.php';
                    break;
                default:
                    include 'home.php';
            }
        }
        else
        {
            include 'home.php';
        }
        ?>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
