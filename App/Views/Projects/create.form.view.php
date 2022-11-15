<div class=" pt-5 ">

        <form method="post" action="?c=projects&a=store" enctype="multipart/form-data">
            <?php /** @var \App\Models\Project $data */
            if ($data->getId()) { ?>
            <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
            <?php } ?>
            <label>
                Text:
                <input type="text" name="text" value="<?php echo $data->getTitle() ?>">

            </label>


            <input type="submit" value="Send">
        </form>

</div>