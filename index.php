<?php
include "include/conn.php";

if(isset($_POST['submit'])){ 

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $role=$_POST['role'];

    $sql="INSERT INTO `user` (`name`, `email`, `password`, `contact`, `role`) VALUES ( '$name', '$email', '$password', '$contact', '$role')";


  $result=mysqli_query($conn,$sql);

            if(!$result){
                echo "Not Submitted";
            }
             else{
                echo "Submitted";
            }
 





}






echo"

<!DOCTYPE html>
<html lang='en'>
    <body>
    <form method='POST'>
        <table>
            <tr><h1>Restaurant Page</h1></tr>
            <tr><td>
                Name: <input type='text' name='name' >
            </td></tr>
            <tr><td>
                Email: <input type='email' name='email' >
            </td></tr>
            <tr><td>
                Password: <input type='password' name='password' >
            </td></tr>
            <tr><td>
                Contact: <input type='number' name='contact' >
            </td></tr>
            <tr><td>
                Role: <input type='radio' name='role' value='1'>Admin <input type='radio' name='role' value='2'>Customer
            </td></tr>
            <tr>
            <td><input type='submit' name='submit'> <button><a href='login.php'>Login Page</a></button></td>
            </tr>
        </table>
    </form>
    </body>
</html>";



?>

       
    
