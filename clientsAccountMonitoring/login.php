<?php
    include('db.php');
    if(isset($_SESSION["type"])) {
        header("location:index.php");
    }
    $message = '';

    if(isset($_POST["login"])){
        if(empty($_POST["email"]) && empty($_POST["password"])){
             $message = "<div class='alert alert-danger'>Both Fields are required</div>";
         }else{
              $query = "
              SELECT * FROM admin
              WHERE email = email
              ";
              $statement = $connect->prepare($query);
              $statement->execute(
                 array(
                  'email' => $_POST["email"]
                  
                 )
              );
      $count = $statement->rowCount();
        if($count > 0){
         $result = $statement->fetchAll();
             foreach($result as $row){
                 if($row["request"] == 'Approved'){
                      if($row["status"] == 'Active'){
                               if($_POST["password"] == $row["password"] && $_POST["email"]== $row["email"]){
                                  $_SESSION["type"] = $row["role"];
                                  header("location: index.php");
                                }else{
                                    $message = '<div class="alert alert-danger">Wrong Password</div>';
                                }
                              }else{
                                   $message = '<div class="alert alert-danger">Your Account has been disabled, please contact admin</div>';
                              }
                     }else{
                     $message = '<div class="alert alert-danger">Your request is not yet approved</div>';
                 }
             }
            }else {
              $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
            }
       }
      }
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Baguio Car Rental</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Baguio Car Rental</h2>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
     <form method="post">
      <span class="text-danger"><?php echo $message; ?></span>
      <div class="form-group">
       <label>User Email</label>
       <input type="text" name="email" id="email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" name="password" id="password" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
      </div>
     </form>
    </div>
   </div>
   
  </div>
 </body>
</html>
