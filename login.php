<?php include("connection.php")?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <h1>Login Aa a Student</h1>
        <p>Provide the ID and password given by NSBM administrators.</p>

         <form method="POST" class="studentLoginForm loginForm" action="loginCode.php">
            <input type="text" name="studentId" placeholder="Enter ID" />
            <input type="text" name="Password" placeholder="Enter Password" />

            <input type="submit" value="login" name="submit">
           
            <p>Don’t have an account?<a href="StudentRequest.php"> Send us a request!</a></p>
       
        </form>
   
    </body>

</html>
