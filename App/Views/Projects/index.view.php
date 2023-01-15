
<?php
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Models\Pouzivatel $user */
?>

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
        <?php if ($auth->isLogged() && $auth->isSpravca()) { ?>
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
            <ul class="card mt-2"  >

                <?php if($project->getImg()) { ?>
                <img src="<?php echo $project->getImg() ?>" class="card-img-top" alt="...">
                <?php } ?>

                <li>
                    <a class="card-title" href="?c=projects&a=project"><?php echo $project->getTitle()?></a>
                </li>


                <?php if ($auth->isLogged() && $auth->isSpravca()) { ?>
                    <li>
                        <a href="?c=projects&a=delete&id=<?php echo $project->getId() ?>"  class="btn btn-danger  ">Delete</a>
                    </li>
                <li>
                    <a href="?c=projects&a=edit&id=<?php echo $project->getId() ?>"  class="btn btn-info">Edit</a>
                </li>

                <?php } ?>

            </ul>
        </div>

<?php } ?>
    </div>

</div>
</div>
</body>


