<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pepito Perez</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
    p{
        color: white;
    }
    </style>
</head>
<body>
    <nav class="navbar" style="background-color: #000000;">
        <a href="?controller=student" class="navbar-brand" style="padding: 20px; padding-top: 30px; padding-bottom: 30px; ">Pepito Perez</a>
        <ul class="navbar-nav">
                <li>
                    <a class="nav-link" href="?controller=security&method=logout" style="color:white;">Cerrar sesion</a></li>
            </ul>
        <?php if(isset($_SESSION['user'])): ?>
            <ul>
                <li><p><?= $_SESSION['user']->name; ?>   </p></li>
            </ul>
        <?php endif; ?>
    </nav>
    </nav>
    <main class="container">

