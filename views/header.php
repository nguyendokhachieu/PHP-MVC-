<?php
    $menu = '<a class="index" href="index.php?controller=index&action=index">Home</a>';

    Session::Init();
    if (isset($_SESSION['loggedIn'])) {
        $menu .= '<a class="group" href="index.php?controller=group&action=index">Group</a>';
        $menu .= '<a class="logout" href="index.php?controller=logout&action=index">Logout</a>';
    }
    else {
        $menu .= '<a class="login" href="index.php?controller=login&action=index">Login</a>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/reset.css" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/custom.js"></script>
    <title>Document</title>
    <script>
        $(document).ready(function() {
            var controller = '<?php echo (isset($_GET['controller']) ? $_GET['controller'] : 'index'); ?>'; 

            $(".header a." + controller).addClass('active');
        });
    </script>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <?php echo $menu; ?>
        </div>