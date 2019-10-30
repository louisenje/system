<?php
include 'action.php';

?>
<!DOCTYPE html>
<html>
<head>
<title> LIPA RENT</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body> 
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">LIPA RENT</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li> 
    </ul>
  </div>
<form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>  
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-10">
<h3 class="text-center text-dark mt-2"> Login </h3>
<hr>
<?php if(isset($_SESSION['response'])){ ?>
<div class="alert alert-<?=$_SESSION['res_type']; ?> 
alert-dismissible text-center">
  <button type="button" class="close" data-dismiss="alert">&times;
  </button>
 <b> <?= $_SESSION['response']; ?></b>
</div>
<?php } unset($_SESSION['response']);?>
</div>
</div>
<div class="row">
<div class="col-md-4"> 
<h3 class="text-center text_info">Login</h3>
<form action="action.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $id;?>">

<div class="form-group">
<input type="email" name="email" value="<?= $email; ?>" class="form-control" placeholder="Enter email" required>
</div>

<div class="form-group">
<input type="password" name="password" value="<?= $password; ?>" class="form-control" placeholder="Password" required>
</div>
<div class= "form-group">
<?php if ($update==true){ ?>
<input type= "submit" name="update" class="btn btn-success btn-block" value="Update record">
<?php } else{ ?>
<input type= "submit" name="add" class="btn btn-primary btn-block" value="Enter">
<?php } ?>
</div>
</form>
</div>
<div class="col-md-8"> 
<?php
$query="SELECT * FROM crud";
$stmt=$conn->prepare($query);
$stmt->execute();
$result=$stmt->get_result();
?>

</div>
</div>
 </body>
</html>