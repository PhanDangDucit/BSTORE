<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bstore</title>
        <link rel="icon" type="image/x-icon" href="./assets/images/brands/favicon.svg">
        <link rel="stylesheet" href="./styles/Vendor/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Code php is used to declare global variables -->
        <?php
            if(isset($_GET['page']) == true) {
                $page = $_GET['page'];
                $_GET = strip_tags('page');
        }
        else {
                echo $page = "";
        }
        ?>
        <div id="main">
            <?php require_once 'layouts/header.php'?>
            <div id="content-session">
                <?php 
                    switch($page) {
                        case 'products':
                            require_once 'pages/products.php';
                            break;
                        case 'carts':
                            require_once 'pages/carts.php';
                            break;
                        case 'signin':
                            require_once 'pages/signin.php';
                            break;
                        case 'signup':
                            require_once 'pages/signup.php';
                            break;
                        case 'search':
                            require_once 'pages/search.php';
                            break;
                        default:
                            require_once 'pages/homepage.php';
                    }
                ?>
            </div>
            <?php require_once 'layouts/footer.php'?>
        </div>
    </body>
</html>