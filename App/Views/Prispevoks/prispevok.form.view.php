
<?php /** @var \App\Models\Prispevok $data */
/** @var \App\Core\IAuthenticator $auth */
?>
<div class="pt -5">
    <div class="pt-lg-5">


    </div>
        <form method="post" action="?c=prispevoks&a=store" enctype="multipart/form-data">
            <?php
            if ($data->getId()) { ?>
            <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
            <?php } ?>
            <div class="row mt-3">
                <div class="md-form mb-3 m-lg-2" >
                    <label for="name"> <input type="text" id="firstName" name="meno" value="<?php echo $data->getMeno()?>" style= "height: 50px"  class="form-control" placeholder="Meno">
                    </label>
                </div>

                <div class="md-form mb-3 m-lg-2">
                    <label for="lastname"> <input type="text" id="lastname" name="priezvisko" value="<?php echo $data->getPriezvisko()?>" style= "height: 50px" class="form-control" placeholder="Last name">
                    </label>
                </div>

                <div class="md-form mb-3 m-lg-2">
                    <label for="subject"><input type="text" id="subject" name="subject" value="<?php echo $data->getSubject()?>" class="form-control" style= "height: 50px" placeholder="Subject"> </label>
                </div>

                <div class="md-form mb-3 m-lg-2">
                    <label for="text"><input id="text" value="<?php echo $data->getText()?>" name="text" style= "height: 100px; width: 380px"  placeholder="Ask us something.. <?php echo $auth->getLoggedUserName()?>" >
                    </label>
                </div>

                <div class="md-form mb-3 m-lg-2">
                    <input type="submit" value="Submit" class="btn btn-success w-25 " >
                </div>

            </div>


        </form>

