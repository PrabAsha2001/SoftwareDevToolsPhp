<?php include("connection.php")?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form.css" asp-append-version="true" />
    
    </head>
    <body>
        <h1>Login Aa a Student</h1>
        <p>Provide the ID and password given by NSBM administrators.</p>

         <form method="POST" class="studentLoginForm loginForm" action="loginCode.php">
            <input type="text" name="studentId" placeholder="Enter ID" />
            <input type="text" name="Password" placeholder="Enter Password" />

            <input type="submit" value="login" name="submit">
           
            <p>Don’t have an account?<a href=""> Send us a request!</a></p>
       
        </form>
   
    </body>

</html>
