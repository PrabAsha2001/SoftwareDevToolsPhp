<?php 
    include("connection.php");
    if(isset($_POST['submit'])){
        $id = $_POST['name'];
        $contact = $_POST['contact'];
        $mail = $_POST['email'];
        $address = $_POST['address'];

        $sql = "INSERT INTO landloardrequest(name, number, email,address) VALUES ('$id', '$contact','$mail','$address')";
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
    <link rel="stylesheet" type="text/css" href="css/form.css" asp-append-version="true" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
    </head>
    <body>
        <h1>Send Us A Request</h1>
        <p>Password and username will be sent to your e-mail.</p>

         <form method="POST" class="LandloardLoginForm loginForm">
            <input type="text" name="name" placeholder="Name" />
            <input type="text" name="contact" placeholder="Contact Number" />
            <input type="text" name="email" placeholder="E-mail" />
            <input type="text" name="address" placeholder="Address" />
           

            <input type="submit" value="login" name="submit">
           
            <p>Already have an account?<a href=""> Log In</a></p>
       
        </form>
        
   
    </body>

</html>