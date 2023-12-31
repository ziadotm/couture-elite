<?php
//include connection file
include('../connection.php');
include('../admin.php');
include('utility.php');

//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('vetement');
$emailValue = "";
$lnameValue = "";
$fnameValue = "";
$passwordValue = "";
$errorMesage = "";
$successMesage = "";

if (isset($_POST["adminLogin"])) {
    $email_input = $_POST["email"];
    $pass_input = $_POST["password"];

    if(!Utility::endsWithEmsiMailDomain($email_input)){
     
        $errorMesage=" email must belong to emsi-edu.ma domain mail";
        
    }

    else{
        Admin::login($email_input, $pass_input,$connection->conn);

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5 ">

        <h2>LOGIN ADMIN</h2>

        <?php

        if (!empty($errorMesage)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorMesage</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  </button>
  </div>";
        }
        ?>

        <br>
        <center>

            <form action="" method="post">

                <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="emaill"><br> Email:</label>
                    <div class="col-sm-6">
                        <br> <input value=" <?php echo $emailValue ?>" class="form-control" type="email" id="email" name="email">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <label class="col-form-label col-sm-1" for="passwordl">Password:</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                </div>


                <div class="col-sm-1 col-sm-3 d-grid">
                    <button type="submitl" class="btn btn-outline-primary" href="frontpage.html" name="adminLogin">Login</button>
                </div>
            </form>
    </div>
    </center>

    </div>

</body>

</html>