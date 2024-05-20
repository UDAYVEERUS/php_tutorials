<!-- INSERT INTO `inotes` (`sno.`, `Title`, `Description`, `tstamp`) VALUES (NULL, 'Buy Books', 'Please buy books for me.', current_timestamp()); -->
<?php

$server_name = "localhost";
$user_name = "root";
$pass = "";
$database = "notes";


$conn = mysqli_connect($server_name, $user_name, $pass, $database);
if(!$conn){
    die("Database not connected" .mysqli_connect_error());
    }
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO `inotes` (`Title`, `Description`, `tstamp`) VALUES ('$title', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
    
        if (!$result) {
            die("<div class='alert alert-danger' role='alert'>
            please fill all the details correctly
          </div>" . mysqli_error($conn));
        } else {
            echo "<div class='alert alert-success' role='alert'>
            Note Added Successfully
          </div>";
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iNotes - CRUD APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
  </head>
  <body>
  
<div class="container mt-3">
    <h1>Add a Note</h1>
    <form action="/udayphp/crud/crud_app.php" method="POST">
  <div class="mb-3">
    <label for="title" class="form-label">Note Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
  <label for="desc" class="form-label">Note Desription</label>
  <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>
</div>
<div class="container mt-3">    
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM `inotes`";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
            while($row = mysqli_fetch_assoc($result)){
              $sno = $sno +1;
                echo "<tr>
                <th scope='row'>$sno</th>
                <td>". $row['Title'] ."</td>
                <td>". $row['Description'] ."</td>
                <td><button class='btn btn-primary'>Edit</button>  <a href='/delete'>Delete</a> </td>
              </tr>";
            }
        
    ?>
  </tbody>
 
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
  <script>
    let table = new DataTable('#myTable');
  </script>
</html>