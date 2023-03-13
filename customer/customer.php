<?php

include "../include/conn.php";
session_start();
$ied=$_SESSION['id'];

  $sql= "SELECT DISTINCT category FROM `userdetail` WHERE `aval`=1" ;
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){ 
      $order = $_POST['item'];
      $cat=$_POST['category'];
      $sql="insert into `items` (`orders`,`userdetailid`,`uid`) values ('$order','$cat','$ied')";
      mysqli_query($conn,$sql);
      header('location:customer.php');
    }

echo "
  <!DOCTYPE html>
  <html lang='en'>
    <head>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='sub.js'></script>
    </head>

  <marquee><h1>WELCOME   ". $_SESSION['name']."</h1></marquee>
  <form method='POST'>
  <table>
    <tr>
    <td>
      Category:<select name='category' id='cat'><option>--Select--</option>";
            foreach($result as $user){
              $u = $user['category'];
                 echo"
                <option value='$u'>".
                $user['category']."
                
                </option>
             ";}
             echo "
          </select>

    </td>
    </tr>
    <tr><td>

    <span id='item'>

    </span>
    </td></tr>

    <tr><td>
    <span id='price'>

    </span>
    </td></tr>

    <tr><td>
    <input type='submit' name='submit' value='ORDER'>
    <a href='customeredit.php'>My Orders</a>  <button><a href='../logout.php'>LOGOUT</a></button>
    <button><a href='../admin/adminpassword.php'>Password Change</a></button>
    </td></tr>
    </table></form>
  
</html>"; 

?>



