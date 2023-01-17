<?php

use App\Models\Project;

/** @var \App\Models\Prispevok $data */

?>
<div class="row" >
    <div class="col-md-12">
        <h3 id="projectTitle" class="text-center project-name"><?php echo $data->getSubject(); ?></h3>
    </div>
    <div class="col-md-12 text-center">
        <a> <?php echo $data->getMeno() . " " . $data->getPriezvisko() ?></a>
    </div>
    <div class="col-md-12 text-center">
        <p id="projectDescription" class="project-description">
            <?php echo $data->getText() ?>
        </p>
        <a href="?c=prispevoks" class="button"><- Go Back</a>
    </div>
</div>



</div>

</body>
</html>

</div>
