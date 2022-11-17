<?php
$layout = 'auth';
/** @var Array $data */
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body p-3">
                    <h5 class="card-title text-center mt-4">Login</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=auth&a=login">

                        <div class="form-label-group mb-3">
                            <input name="login" type="text" id="login" class="form-control m-4 w-75" placeholder="Login"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="form-control  m-4 w-75"
                                   placeholder="Password" required>
                        </div>
                        <div class="text-center mt-4 mb-4">
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Submit
                            </button>
                            <div class="text-center">Don't have an account? <a href="?c=auth&a=register">Register Here</a></div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
