<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="view/css/styleLogReg.css">

    <title>User Panel</title>
</head>

<body>
    <!-- header -->
    <header class="header bg-primary">

        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-primary">
                <ul class="nav justify-content-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;"><img src="view/img/logocubo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            NSV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg></a>
                    </li>

                </ul>
            </nav>
        </div>

    </header><br><br>

    <?php
    require_once("controller/configIndex.php");
    ?>
    <!-- Login -->
    <form action="" method="POST">
        <div class="container" id="login">
            <h1>Login</h1><br>

            <div class="form-floating">
                <input type="email" class="form-control" name="emailLogin" id="EmailLog" placeholder="name@example.com" required>
                <label for="floatingInputGrid">Email</label>
            </div><br>
            <div class="form-floating">
                <input type="password" class="form-control" name="passwordLogin" id="Password" placeholder="password" required>
                <label for="floatingInputGrid">Password</label>
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary" name="btnLogin" value="Login">Login</button>
            </div>

        </div><br><br><br><br>
    </form>
    <!-- Register -->
    <form action="" method="POST">
        <div class="container" align="center">
            <h3></h3>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Register
            </button>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: black;">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Register</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="firstName" placeholder="First Name">
                                    <label for="floatingInputGrid">First Name</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="secondName" placeholder="Second Name">
                                    <label for="floatingInputGrid">Second Name</label>
                                </div>
                            </div>
                        </div><br>
                        <div class="form-floating">
                            <input type="email" class="form-control" name="EmailReg" placeholder="name@example.com" required>
                            <label for="floatingInputGrid">Email</label>
                        </div><br>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="Password" placeholder="password" required>
                            <label for="floatingInputGrid">Password</label>
                        </div><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnRegister" name="btnRegister" value="Register">Register</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>


                </div>
            </div>
        </div>
    </form>

</body>

</html>