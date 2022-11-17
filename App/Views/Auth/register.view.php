<?php
$layout = 'auth';
/** @var Array $data */
?>
<script >
    function verifyEmail() {
        var email = document.getElementById("email").value;

        if (email.includes("@") ) {
            document.getElementById("messageEmail").innerHTML = "";
        }
        else{
            document.getElementById("messageEmail").innerHTML = "Invalid email adress!";
        }

    }


    function verifyPassword() {
        var pw = document.getElementById("password").value;



        if(pw.length < 8) {
            document.getElementById("messagePswd").innerHTML = "Password length must be atleast 8 characters!";
        }
        else if (pw.length > 15){
            document.getElementById("messagePswd").innerHTML = "Password length must be less than 15 characters!";

        }
       else {
            document.getElementById("messagePswd").innerHTML = "";
        }

    }
    function checkConfPass() {
        var pw = document.getElementById("password").value;
        var cpw = document.getElementById("cpassword").value;



        if (pw !== cpw) {
            document.getElementById("messageCpswd").innerHTML = "Passwords doesnt match!";
            return false;
        } else
            document.getElementById("messageCpswd").innerHTML = "";

    }
</script>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body m-4">
                    <h5 class="card-title text-center mt-5">Registration</h5>
                    <div class="text-center text-danger mb-3">
           <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="?c=auth&a=register">
                        <div class="form-label-group mb-3">
                            <input name="email" type="text" id="email" class="form-control m-4 w-75" placeholder="Email"
                                   required autofocus  onfocusout="verifyEmail()">
                            <div class="text-center  m-4 w-75" id = "messageEmail" style="color:red"> </div>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="login" type="text" id="login" class="form-control m-4 w-75" placeholder="Login"
                                   required >
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="form-control  m-4 w-75"
                                   placeholder="Password" required onfocusout="verifyPassword()">
                            <div class="text-center  m-4 w-75" id = "messagePswd" style="color:red"> </div>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="cpassword" type="password" id="cpassword" class="form-control  m-4 w-75"
                                   placeholder="Confirm Password" required onfocusout="checkConfPass()">
                            <div class="text-center  m-4 w-75" id = "messageCpswd" type="hidden"  style="color:red"> </div>
                        </div>
                        <div class="text-center mt-4 mb-4">

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">
                                Register
                            </button>
                            <div class="text-center">Already have an account? <a href="?c=auth&a=login">Sign in</a></div>


                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</html>
