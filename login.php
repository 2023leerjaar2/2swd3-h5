<?php
require "helper.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    login($_POST); }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="mainStyle" rel="stylesheet" href="CSS/login.css">
</head>
<body>
<form method="POST">
<section class="vh-100" style="background-color: #cecece;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="IMG/login.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 30vw;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img src=img/logoKamadoing.png style="width: 200px;">
                  </div>
                            <div class="mb-2 mt-5">
                                <input type="Name" name="Naam" class="form-control auth-input" placeholder="Gebruikersnaam" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text input-info-text"></div>
                            </div>

                            <div class="mb-2">
                                <input type="Wachtwoord" name="Wachtwoord" class="form-control auth-input" placeholder="Wachtwoord">
                            </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type='submit' name='submit' value='inloggen'>Login</button>
                  </div>
                  <div class="text-center text-lg-start mt-4 pt-2">
            <p class="small fw-bold mt-2 pt-1 mb-0">Heb je geen account? <a href="registreren.php"
                class="link-danger">Register</a></p>
          </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </form>
</body>

</html>