<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/public/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Compote.eu</title>
</head>
<body>

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
                            <a class="nav-link" href="?c=home&a=about">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=projects"> Projekty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=home&a=contact"> Kontakt</a>
                        </li>
                    </ul>
                    <a class="navbar-brand me-5"> COMPOTE </a>

                    <ul class="navbar nav ms-auto">

                        <li class="container-fluid justify-content-end">
                            <button class="btn btn-outline-success me-2" type="button" data-bs-toggle="modal" data-bs-target="#login">Login</button>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>
<div class="modal fade" id="login" tabindex="-1" aria-labelledby=".nav" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="logBut modal-body p-3 pt-0" >
                <div class="">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingEmail" placeholder="name@example.com">
                        <label for="floatingEmail">Email address</label>
                    </div>
                    <div class="form-floating mb-3" >
                        <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-0 bg-dark text-bg-dark" type="submit">Sign up</button>
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="projekty">
    <h3 class="nadpis">Nase projekty:</h3>
    <div class="row row-cols-3 row-cols-md-6 g-3">
        <div class="project-col p-3">
            <div class="card" >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top" alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_1</h2>
                    <p class="card-text">Description_1. </p>
                </div>
            </div>
        </div>

        <div class="project-col p-3">
            <div class="card" >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

        <div class="project-col p-3">
            <div class="card " >
                <a href="?c=home&a=index">
                    <img src="https://www.firstbenefits.org/wp-content/uploads/2017/10/placeholder-1024x1024.png" class="card-img-top"  alt="Nenaloadovalo">
                </a>
                <div class="card-body">
                    <h2 class="card-title">Project_2</h2>
                    <p class="card-text">Description_2.</p>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="footer">
    <footer class="bg-dark text-center text-lg-start text-white">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright:
            <a class="text-white" href="https://compote.eu/">compote.eu</a>
        </div>
    </footer>
</div>

</body>
</html>
