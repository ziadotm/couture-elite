<?php
//include connection file
include('../connection.php');
include('city.php');


//create in instance of class Connection
$connection = new Connection();


//call the selectDatabase method
$connection->selectDatabase('vetement');
$cityValue = "";


$cities = City::selectAllcities("cities",$connection->conn);


if($_GET["delete"]){

    city::deleteById("cities",$_GET["delete"], $connection->conn);
}

if(isset($_POST["submitc"])){

    $cityValue = $_POST["cityjdida"];
   

    if(empty($cityValue)){

            $errorMesage = "all fileds must be filed out!";

    }else{
       
    
    //include the client file
   
    //create new instance of client class with the values of the inputs
    $cit = new City($cityValue);
   
//call the insertClient method
$cit->insertCity('cities',$connection->conn);

//give the $successMesage the value of the static $successMsg of the class
$successMesage = City::$successMsg;

//give the $errorMesage the value of the static $errorMsg of the class
$errorMesage = City::$errorMsg;

$cityValue = "";

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



    <style>
table{
	width:100%;
}
td form {
	margin:0;padding:0;
}
td form button.button{
	padding:0.25em;margin:0.25em;
	background:none;
	color:blue;
}
td form button.button:hover{
  background:none;
	color:steelblue;
}
    </style>    
</head>
<body>
    <div class="container my-5 ">

        <h2>For the Admin</h2>

    <?php

    if(!empty($errorMesage)){
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorMesage</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
  </button>
  </div>";
    }
       ?>

        <br>
        <form method="post">
            <div class="row mb-3">
                    <label class="col-form-label col-sm-1" for="fname">City Name:</label>
                    <div class="col-sm-6">
                        <input value="<?php echo $cityValue ?>" class="form-control" type="text" id="fname" name="cityjdida">
                    </div>

                    <div class="offset-sm-1 col-sm-3 d-grid">
                        <button name="submitc" type="submit" class=" btn btn-primary">ADD City</button>
                    </div><br>
                   
            </div>
            </form>
            
   </div>

            <?php
            if(!empty($successMesage)){
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>$successMesage</strong>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
</button>
</div>";
            }
  ?>  



<div class="row">
  <div class="large-12 columns">
    <table id="test-table">
      <thead>
        <tr>
          <th>id</th>
          <th>city name</th>
        </tr>
      </thead>
      <tfoot></tfoot>
      <tbody>
	
        <?php foreach($cities as $city) { ?>
       

            <tr>
          <td><?php echo $city['id']?> </td>
          <td><?php echo $city['name']?> </td>
          <td>
						<form action="">
						  <a href="?delete=<?php echo $city['id'];?>">supprimer</a>
						</form>
					</td>
        </tr>

        <?php } ?>    
      </tbody>
    </table>
  </div>
</div>
      

</body>
</html>
