<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta description. This will show up in search results.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <title></title>
    </head>
    <body>

        <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.png" alt="logo" width="30" height="24">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About Me</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                        <?php
                            if(isset($_SESSION['userId'])) {
                                echo '<form class="d-flex" action="includes/logout.inc.php" method="post">
                                    <button class="btn btn btn-dark" type="submit" name="logout-submit">Logout</button>
                                    </form> ';
                            } else {
                                echo '<form class="d-flex" action="includes/login.inc.php" method="post">
                                    <input class="form-control me-2" type="text" name="mailuid" placeholder="Username/Email...">
                                    <input class="form-control me-2" type="password" name="pwd" placeholder="Password...">
                                    <button class="btn btn btn-dark" type="submit" name="login-submit">Login</button>
                                    </form>
                                    <a class="btn btn-light" href="signup.php">Signup</a>';
                            }
                        ?>       
                    </div>
                </div>
            </nav>
        
        </header>