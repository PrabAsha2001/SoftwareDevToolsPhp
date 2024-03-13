<?php  include("connection.php") ?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form.css" asp-append-version="true" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/form.css"/>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="AddNewStudent.php" class="text-light">Add Student</a></button>
    
            <h1>New Student Requests</h1>
            <br>
            <table class="table">
                <thead>
                    
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Remove</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    $sql="select * from studentrequest";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while ($row=mysqli_fetch_assoc($result)) {
                            $id=$row['ID'];
                            $NsbmMail=$row['NsbmMail'];

                            echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $NsbmMail . '</td>
                            <td><button class="btn btn-danger"><a href="Delete.php? deleteid='.$id.' "class="text-light">Delete Request</a></button></td>
                            </tr> ';
                        }
                    }
                    
                    ?>
                    
                </tbody>
            </table>
        </div>
    </body>

</html>
