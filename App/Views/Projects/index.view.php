
<?php
/** @var \App\Core\IAuthenticator $auth */
?>
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/public/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Compote.eu</title>
</head>
<body>

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
    <div >
        <?php if ($auth->isLogged()) { ?>
        <a href="?c=projects&a=create " class="btn btn-success">Create project</a>
        <?php } ?>
    </div>
</div>
    <h3 class="nadpis">Nase projekty:</h3>
    <div class="projects-container mt-2">
            <?php
            use \App\Models\Project;
            /** @var Project[] $data */
            foreach ($data as $project) {
            ?>
        <div >
            <a class="card mt-2" href="?c=projects&a=project" >

                <?php if($project->getImg()) { ?>
                <img src="<?php echo $project->getImg() ?>" class="card-img-top" alt="...">
                <?php } ?>

                    <h5 class="card-title "><?php echo $project->getTitle()?></h5>

                    <?php if ($auth->isLogged()) { ?>
                    <a href="?c=projects&a=delete&id=<?php echo $project->getId() ?>"  class="btn btn-danger  ">Delete</a>
                    <a href="?c=projects&a=edit&id=<?php echo $project->getId() ?>"  class="btn btn-info">Edit</a>
                    <?php } ?>


            </a>
        </div>
    </div>

<?php } ?>


</body>
</html>
