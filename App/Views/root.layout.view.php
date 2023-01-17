<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */


?>
<!DOCTYPE html>
<head>

    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/public/js/script.js"></script>

</head>
<body onload=" setHeader()">
<nav class="navbar navbar-expand-sm bg-light">
    <header>
        <div>
            <nav class="navbar navbar-expand-md navbar-dark bg-black" id=".nav" >
                <div class="container-fluid">
                    <a class="navbar-brand" href="?c=home&a=index"><img src="/public/images/bloc_logo_small_1.png" width="45" height="45" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#zoznam" aria-controls="zoznam" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="zoznam">
                        <ul class="navbar-nav me-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="?c=home&a=index">O nas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?c=projects"> Projekty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?c=home&a=contact"> Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?c=prispevoks"> Prispevky</a>
                            </li>
                        </ul>
                        <a class="navbar-brand me-5"> COMPOTE </a>
                        <ul>
                            <?php if ($auth->isLogged()) { ?>

                                <li  style="margin-right: 10px"> Vitaj <?php echo $_SESSION['user_login']; {} ?>, </li>
                                <li id="casText"> </li>

                            <?php } ?>

                        </ul>

                        <ul class="navbar nav ms-auto">

                            <?php if ($auth->isLogged()) { ?>
                            <li class="container-fluid justify-content-end">
                                <a class="nav-link" href="?c=auth&a=logout">Logout</a>
                            </li>
                            <?php } else { ?>
                            <li class="container-fluid justify-content">
                                <a class="nav-link" href="?c=auth&a=register">Register</a>
                                <a class="nav-link" href="?c=auth&a=login">Login</a>
                            </li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>



