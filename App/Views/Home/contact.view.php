
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/public/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Compote.eu</title>
</head>
<body>

<div class="kontakt_text">
    <div class="container-fluid mt-auto p-2">
        <div class="row ">
            <div class="col-6 col-xl mb-3">
                <h5>Kontakt</h5>
                <ul class="kontakt flex-column">
                    <li class="nav-item mb-2"> <a href = "https://mail.google.com/mail">info@compote.eu</a></li>

                </ul>
            </div>

            <div class="col-6 col-xl mb-3">
                <h5>Adresa</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><div class="adresa ">compote, s.r.o.</div></li>
                    <li class="nav-item mb-2"><div class="adresa ">Vysokoškolákov 1757/1</div></li>
                    <li class="nav-item mb-2"><div class="adresa ">010 01 Žilina</div></li>
                    <li class="nav-item mb-2"><div class="adresa ">Slovak Republic</div></li>
                </ul>
            </div>

            <div class="col-6 col-xl me-2">
                <h5>Info</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><div class="udaje  ">IČO: 47 622 997</div></li>
                    <li class="nav-item mb-2"><div class="udaje  ">DIČ: 2024007282</div></li>
                    <li class="nav-item mb-2"><div class="udaje  ">IČ DPH: SK2024007282</div></li>

                </ul>
            </div>


        </div>
    </div>
</div>

<div class="dotazy pt-1">
    <h2 class="ps-3 font-weight-bold text-start">Dotazy</h2>
    <div class="row">

        <div class="col-md-12 mb-md-2 ">
            <form id="contact-form" name="contact-form">
                <div class="row">
                    <div class="col-md-3">
                        <div class="md-form mb-2">
                            <label for="name"></label><input type="text" id="name" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="md-form mb-2">
                            <label for="email"></label><input type="text" id="email" name="email" class="form-control" placeholder="email@gmail.com">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <label for="subject"></label><input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <button type="button" class="btn btn-success w-100" >Submit</button>
                    </div>
                </div>





            </form>

        </div>
    </div>
</div>



</body>
</html>