<?php
include 'include/conn.php';

if(isset($_POST['submit'])){ 

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $role=$_POST['role'];

    $sql="INSERT INTO `user` (`name`, `email`, `password`, `contact`, `role`) VALUES ( '$name', '$email', '$password', '$contact', '$role')";


  $result=mysqli_query($conn,$sql);

            if(!$result){
                echo '<div class="alert alert-danger" role="alert">
                Please fill the form.</div>
              ';
            }
             else{
                echo "<div class='alert alert-success' role='alert'>
               Form Submitted!
              </div>
              ";
            }

}
echo"

<!DOCTYPE html>
<html lang='en'>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor' crossorigin='anonymous'>
    <style>
    li{
        list-style:none;
    }
    body{
        background-color:rgb(242, 242, 242);
    }
    </style>

</head>
    <body>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js' integrity='sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2' crossorigin='anonymous'></script>
    <nav class='navbar navbar-dark bg-dark text-white'>
    <ul ><li >
    <h1>Restaurant Project </h1>
    </li></ul>
    </nav>
<form class='row g-3 container-fluid' method='POST'>
<div class='col-md-4 container-fluid mt-4'>
  <label for='inputEmail4' class='form-label'>Name</label>
  <input type='email' class='form-control' id='inputEmail4' name='name' placeholder='Enter Name'>
</div>
<div class='col-md-4 container-fluid mt-4'>
  <label for='inputPassword4' class='form-label'>Email</label>
  <input type='email' class='form-control' id='inputPassword4' name='email' placeholder='Enter Email'>
</div>
<div class='col-md-4  container-fluid mt-4'>
  <label for='inputAddress' class='form-label'>Password</label>
  <input type='password' class='form-control' id='inputAddress' name='password' placeholder='Enter Password'>
</div>
<div class='col-md-4 '>
  <label for='inputAddress2' class='form-label'>Contact</label>
  <input type='number'class='form-control' id='inputAddress2' placeholder='Enter Phone No'  name='contact'>
</div>
<div class='container-fluid col-md-12'>Role:<div class='form-check'>
<input class='form-check-input' type='radio' name='role' id='flexRadioDefault1' value='1'>
<label class='form-check-label' for='flexRadioDefault1'>
 Admin
</label>
</div>
<div class='form-check'>
<input class='form-check-input' type='radio' name='role' id='flexRadioDefault2' value='2'checked>
<label class='form-check-label' for='flexRadioDefault2'>
  Customer
</label>
</div></div>

<div class='col-12'>
  <button type='submit' name='submit' class='btn btn-primary'>Sign in</button>
  <button type='button' class='btn btn-success'><a class='text-white' href='login.php'>Login</a></button>
</div>
    </form>
    </body>
</html>";

?>

