<?php include("connection.php")?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form.css" asp-append-version="true" />
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

    <nav class="container-fluid navbar-small">
        <span><a href="">Admin</a></span>>
        <span><a href="">Warden</a></span>>
    </nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGONAME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Login.php">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="LandLoardLogin.php">Addvertistment</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="LandLoardLogin.php">Contact Us</a>
            </li>
            

        </ul>
        <button><a href="StudentMap.php">Map</button>
        </div>
    </div>
    </nav>
    
        <h1>Login Aa a Landloard</h1>
        <p>Provide the ID and password given by NSBM administrators.</p>

         <form method="POST" class="LandLoardLoginForm loginForm" action="LandLoardLoginCode.php">
            <input type="text" name="username" placeholder="Username" />
            <input type="text" name="password" placeholder="Password" />

            <input type="submit" value="login" name="submit">
           
            <p>Don’t have an account?<a href="LandLoardRequest.php"> Send us a request!</a></p>
       
        </form>
   
    </body>

</html>
