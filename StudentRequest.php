<?php include("connection.php")?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form.css" asp-append-version="true" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    </head>
    <body>
        <h1>Send Us Request</h1>
        <p>Password will be sent to your NSBM e-mail.</p>

         <form method="POST" class="studentLoginForm loginForm" action="StudentRequestCode.php">
            <input type="text" name="studentmail" placeholder="NSBM student e-mail" />
           

            <input type="submit" value="login" name="submit">
           
            <p>Don’t have an account?<a href=""> Send us a request!</a></p>
       
        </form>
        
   
    </body>

</html>
