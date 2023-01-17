<div class=" pt-5 ">
    <form method="post" action="?c=projects&a=store" enctype="multipart/form-data">
        <?php /** @var \App\Models\Project $data */
        if ($data->getId()) { ?>
            <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
        <?php } ?>
        <label>
            Title:
            <input type="text" name="title" value="<?php echo $data->getTitle() ?>">
        </label>
        <label>
            Project Description:
            <input type="text" name="projdesc" value="<?php echo $data->getPrjdesc() ?>">
        </label>
        <label>
            Technologies:
            <input type="text" name="technologies" value="<?php echo $data->getTechnologies() ?>">
        </label>
        <label>
            Image:
            <input type="file" onfocus="" name="image" value="<?php echo $data->getImg() ?>" accept="image/*">
        </label>
        <input type="submit" value="Send">
    </form>
</div>