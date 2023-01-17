<?php

use App\Models\Project;

/** @var \App\Models\Project $data */



?>

<div class="row" >
    <div class="col-md-12">
        <h3 id="projectTitle" class="text-center project-name"><?php echo $data->getTitle(); ?></h3>
    </div>
    <div class="col-md-12 text-center">
        <img id="projectImage" src="<?php echo $data->getImg(); ?>" style="width: 400px; height: 400px;  alt="Project Image" class="img-fluid project-image">
    </div>
    <div class="col-md-4 offset-md-4">
        <p id="projectDescription" class="project-description">
            <?php echo $data->getPrjdesc(); ?>
        </p>
        <div id="projectTechnologies" class="project-tech">
            <p> <?php echo $data->getTechnologies(); ?> </p>
        </div>
    </div>
</div>

</div>
</div>