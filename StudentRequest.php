<?php 
    include("connection.php");
    if(isset($_POST['submit'])){
        $id = $_POST['studentId'];
        $mail = $_POST['studentmail'];

        $sql = "INSERT INTO studentrequest (ID, NsbmMail) VALUES ('$id', '$mail')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: Thankyou.html");
        } else {
            
            die("Error: " . mysqli_error($conn));
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
    </head>
    <body>
        <h1>Send Us A Request</h1>
        <p>Password will be sent to your NSBM e-mail.</p>

         <form method="POST" class="studentLoginForm loginForm">
            <input type="text" name="studentId" placeholder="NSBM StudentId" />
            <input type="text" name="studentmail" placeholder="NSBM student e-mail" />
           

            <input type="submit" value="login" name="submit">
           
            <p>Already have an account?<a href="Login.php"> Log In</a></p>
       
        </form>
        
   
    </body>

</html>
