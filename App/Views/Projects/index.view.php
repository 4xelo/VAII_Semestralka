
<?php
/** @var \App\Core\IAuthenticator $auth */

?>



<div class="projekty">
    <div >
        <?php if ($auth->isLogged() && $auth->isSpravca()) { ?>
        <a href="?c=projects&a=create " class="btn btn-success">Create project</a>
        <?php } ?>
    </div>
</div>
<h3 class="nadpis">Nase projekty:</h3>
<div class="projects-container mt-2">

    <input type="text" class="form-control" id="filter-input" style="width: 300px" onchange="filterProjects()" placeholder="Filter by title...">

    <table class="table">
        <thead>
        <tr style="color: white">
            <th>Title</th>
            <?php if ($auth->isLogged() && $auth->isSpravca()) { ?>
                <th>Actions</th>
            <?php } else { ?>
            <th></th>
            <?php } ?>
        </tr>
        </thead>
        <tbody id="tbody">
        <?php
        use \App\Models\Project;
        /** @var Project[] $data */
        foreach ($data as $project) {
            ?>
            <tr>
                <td><a href="?c=projects&a=project&id=<?php echo $project->getId() ?>" class="title-link"><?php echo $project->getTitle()?></a></td>

                <td>
                    <?php if ($auth->isLogged() && $auth->isSpravca()) { ?>
                        <a href="?c=projects&a=delete&id=<?php echo $project->getId() ?>"  class="btn btn-danger">Delete</a>
                        <a href="?c=projects&a=edit&id=<?php echo $project->getId() ?>"  class="btn btn-info">Edit</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</div>
</div>
</body>


