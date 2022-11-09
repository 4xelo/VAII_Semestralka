
<?php
use App\Models\Project;
/** @var Project[] $data */

foreach ($data as $project) {
 ?><div class="card my-3" style="width: 18rem;">
  <?php if ($project->getImg()) { ?>
    <img src="<?php echo $project->getImg() ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $project->getTitle() ?></h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<?php }} ?>

