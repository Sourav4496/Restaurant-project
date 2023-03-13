<?php
include "include/conn.php";

session_start();
    if(isset($_SESSION['name']) && $_SESSION['role']=='1'){
        header("Location:admin/admin.php");
    }
    elseif(isset($_SESSION['name']) && $_SESSION['role']=='2'){
        header("Location: customer/customer.php");
    }
    else{
        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
   
   
             $sql= "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
   
            $result=mysqli_query($conn,$sql);

            $row=mysqli_fetch_assoc($result);
  
   if($row){
       $_SESSION['role']=$row['role'];
       $_SESSION['name']=$row['name'];
       $_SESSION['id']=$row['id'];
            if($row['role']=="1"){
        
                header('Location:admin/admin.php');
            }
            if($row['role']=="2"){
       
                header("Location: customer/customer.php");
            }
    
    }
    else{
            echo "Please fill data.";
    }
    }
    }







echo"




<!DOCTYPE html>
<html lang=en>


    <body>
    <form action='' method='POST'>
        <table>
            <tr>
                <th>Login Page</th>
            </tr>
            <tr>
                <td>
                    Email: <input type=email name=email >
                </td>
            </tr>
            <tr>
                <td>
                    Password: <input type=password name=password>
                </td>
            </tr>
            <tr>
                <td><input type='submit' name='submit'></td>
                <button><a href='index.php'>Back</a></button>
            </tr>

        </table>
    </form>
    </body>
</html>";



?>