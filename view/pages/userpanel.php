<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/styleUserPanel.css">

    <title>User Panel</title>
</head>

<body>

    <header class="header bg-primary">

        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-primary">
                <ul class="nav justify-content-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;"><img src="../img/logocubo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            NSV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg></a>
                    </li>

                </ul>

                <div class="container" style="display: contents;">
                    <h4 style="color: white;">Olá Sr(a). Usuário.</h4>
                    <a href="" style="color: white;">Logout</a>
                </div>

            </nav>
        </div>

    </header><br>


    <div class="container" id="main">

        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Tables
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#" id="btnTableCards">Cards</a></li>
                <li><a class="dropdown-item" href="#" id="btnTableImages">Images</a></li>
                <li><a class="dropdown-item" href="#" id="btnTableUsers">Users</a></li>
            </ul>
        </div><br><br>
        
        <div class="container" align="right" id="btnsCards">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertCards">
                Insert
            </button>

            <div class="modal fade" id="insertCards" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Insert Card</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-floating">
                                    <input type="text" class="form-control" name="titleCardInsert" placeholder="Title" required>
                                    <label for="floatingInputGrid">Title</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="desCardInsert" placeholder="Description" required>
                                    <label for="floatingInputGrid">Description</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="urlCardInsert" placeholder="folder/img.png" required>
                                    <label for="floatingInputGrid">URL Image</label>
                                </div><br>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnCardInsert" value="Insert">Insert</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#alterCards">
                Alter
            </button>

            <div class="modal fade" id="alterCards" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Alter Card</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-floating">
                                    <input type="text" class="form-control" name="idCardAlter" placeholder="ID">
                                    <label for="floatingInputGrid">ID</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="titleCardAlter" placeholder="Title">
                                    <label for="floatingInputGrid">Title</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="desCardAlter" placeholder="Description">
                                    <label for="floatingInputGrid">Description</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="urlCardAlter" placeholder="folder/img.png">
                                    <label for="floatingInputGrid">URL Image</label>
                                </div><br>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnCardAlter" value="Alter">Alter</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCards">
                Delete
            </button>

            <div class="modal fade" id="deleteCards" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Delete Card</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-floating">
                                    <input type="text" class="form-control" name="idCardDelete" placeholder="ID" required>
                                    <label for="floatingInputGrid">ID</label>
                                </div><br>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnCardDelete" value="Delete">Delete</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="container" align="right" id="btnsImages">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertImg">
                Insert
            </button>

            <div class="modal fade" id="insertImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Insert Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-floating">
                                    <input type="text" class="form-control" name="desImgInsert" placeholder="Description" required>
                                    <label for="floatingInputGrid">Description</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="urlImgInsert" placeholder="folder/img.png" required>
                                    <label for="floatingInputGrid">URL Image</label>
                                </div><br>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnImgInsert" value="Insert">Insert</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#alterImg">
                Alter
            </button>

            <div class="modal fade" id="alterImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Alter Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-floating">
                                    <input type="text" class="form-control" name="idImgAlter" placeholder="ID">
                                    <label for="floatingInputGrid">ID</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="desImgAlter" placeholder="Description">
                                    <label for="floatingInputGrid">Description</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="urlImgAlter" placeholder="folder/img.png">
                                    <label for="floatingInputGrid">URL Image</label>
                                </div><br>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnImgAlter" value="Alter">Alter</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteImg">
                Delete
            </button>

            <div class="modal fade" id="deleteImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Delete Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="form-floating">
                                    <input type="text" class="form-control" name="idImgDelete" placeholder="ID" required>
                                    <label for="floatingInputGrid">ID</label>
                                </div><br>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnImgDelete" value="Delete">Delete</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="container" align="right" id="btnsUsers">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertUser">
                Insert
            </button>

            <div class="modal fade" id="insertUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Insert User</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="userFNInsert" placeholder="First Name" required>
                                            <label for="floatingInputGrid">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="userSNInsert" placeholder="Second Name" required>
                                            <label for="floatingInputGrid">Second Name</label>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="userEmailInsert" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Email</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="userPassInsert" placeholder="password" required>
                                    <label for="floatingInputGrid">Password</label>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnUserInsert" value="Insert">Insert</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#altertUser">
                Alter
            </button>

            <div class="modal fade" id="altertUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Alter User</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="userIDAlter" placeholder="ID">
                                    <label for="floatingInputGrid">ID</label>
                                </div><br>
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="userFNAlter" placeholder="First Name">
                                            <label for="floatingInputGrid">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="userSNAlter" placeholder="Second Name">
                                            <label for="floatingInputGrid">Second Name</label>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="userEmailAlter" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Email</label>
                                </div><br>
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="userPassAlter" placeholder="password">
                                    <label for="floatingInputGrid">Password</label>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnUserAlter" value="Alter">Alter</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletetUser">
                Delete
            </button>

            <div class="modal fade" id="deletetUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: black;">
                                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Delete User</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="userIDDelete" placeholder="ID">
                                    <label for="floatingInputGrid">ID</label>
                                </div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnUserDelete" value="Delete">Delete</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div><br>

        <?php 
            require_once("../../controller/autoload.php"); 
        ?>

        <table class="table table-secondary" id="tableCards">

            
            <thead>
                <tr class="table-dark">
                    <h4 id="titleCards"><span class="badge bg-dark">Table Cards</span></h4>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">URL Imagem</th>
                    <th scope="col">Registro</th>
                </tr>
            </thead>
            <?php 
                $crudCards = new CRUD_Card;

                $crudCards->insertCard(); 
                $crudCards->alterCard();
                $crudCards->deleteCard();

                $stmtReadCard = $crudCards->selectCard();                
                while($cardsRow = $stmtReadCard->fetch(PDO::FETCH_ASSOC)) { ?>
            
                <tbody>
                <tr>
                    <th scope="row"><?php echo $cardsRow['id']; ?></th>
                    <td><?php echo $cardsRow['title']; ?></td>
                    <td><?php echo $cardsRow['description']; ?></td>
                    <td><?php echo $cardsRow['localimg']; ?></td>
                    <td><?php echo $cardsRow['dtregister']; ?></td>
                </tr>             
            </tbody>

                <?php } ?>
            
        </table>

        <table class="table table-secondary" id="tableImages">
            <thead>
                <h4 id="titleImages"><span class="badge bg-dark">Table Images</span></h4>
                <tr class="table-dark">
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">URL Imagem</th>
                    <th scope="col">Registro</th>
                </tr>
            </thead>

            <?php 
                $crudImages = new CRUD_Image;

                $crudImages->insertImage(); 
                $crudImages->alterImage();
                $crudImages->deleteImage();

                $stmtReadImage = $crudImages->selectImages();                
                while($imagesRow = $stmtReadImage->fetch(PDO::FETCH_ASSOC)) { ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $imagesRow['id']; ?></th>
                    <td><?php echo $imagesRow['description']; ?></td>
                    <td><?php echo $imagesRow['localimg']; ?></td>
                    <td><?php echo $imagesRow['dtregister']; ?></td>
                </tr>
            </tbody>

                <?php } ?>

        </table>

        <table class="table table-secondary" id="tableUsers">
            <thead>
                <tr class="table-dark">
                    <h4 id="titleUsers"><span class="badge bg-dark">Table Users</span></h4>
                    <th scope="col">ID</th>
                    <th scope="col">1º Nome</th>
                    <th scope="col">2º Nome</th>
                    <th scope="col">email</th>
                    <th scope="col">Registro</th>
                </tr>
            </thead>

            <?php 
                $crudUsers = new CRUD_User;

                $crudUsers->insertUser(); 
                $crudUsers->alterUser();
                $crudUsers->deleteUser();

                $stmtReadUser = $crudUsers->selectUser();                
                while($userRow = $stmtReadUser->fetch(PDO::FETCH_ASSOC)) { ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $userRow['id']; ?></th>
                    <td><?php echo $userRow['firstname']; ?></td>
                    <td><?php echo $userRow['secondname']; ?></td>
                    <td><?php echo $userRow['email']; ?></td>
                    <td><?php echo $userRow['passworduser']; ?></td>
                </tr>
            </tbody>

            <?php } ?>
        </table>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>