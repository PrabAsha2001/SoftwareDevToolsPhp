<?php include("connection.php")?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form.css" asp-append-version="true" />
    
    </head>
    <body>
        <h1>Login Aa a Landloard</h1>
        <p>Provide the ID and password given by NSBM administrators.</p>

         <form method="POST" class="LandLoardLoginForm loginForm" action="LandLoardLoginCode.php">
            <input type="text" name="username" placeholder="Username" />
            <input type="text" name="password" placeholder="Password" />

            <input type="submit" value="login" name="submit">
           
            <p>Don’t have an account?<a href=""> Send us a request!</a></p>
       
        </form>
   
    </body>

</html>