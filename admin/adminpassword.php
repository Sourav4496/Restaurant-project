<?php

include "../include/conn.php";

session_start();
    if(isset($_POST['submit'])){

        $oldpass=$_POST['password1'];
        $newpass=$_POST['password2'];
        $confirmpass=$_POST['password3'];

        $sql= "SELECT `password` from `user` WHERE id='$_SESSION[id]'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
  
        if($oldpass == $row['password']){

        echo "Your old pasword matched with database";
            if($newpass === $confirmpass){
                echo "...Okay password change";
        
                    if($oldpass!=$confirmpass){
                        $sql1="UPDATE `user` SET password='$confirmpass' WHERE `id`=$_SESSION[id]" ;
                        $result=mysqli_query($conn,$sql1);
                             }  
                             //   }
                    else{
                         echo "Your new password and confirm password didnt match.";
                         } 
       
            }
        }
    else{
      echo "Your password didn't match"; 
    } 
             
    }








echo"

<!DOCTYPE html>
<html lang='en'>

    <body>
    <form  method='post'>
        <table>
            <tr>
                <td><h1>Change Password</h1></td>
            </tr><tr>
                <td>
                    Current Password:<input type='password' name='password1' >
                </td>
            </tr>
            <tr>
                <td>
                    New Password:<input type='password' name='password2' >
                </td>
            </tr>
            <tr>
                <td>
                    Confirm Password: <input type='password' name='password3' >
                </td>
            </tr>
            <tr>
                <td>
                    <input type='submit' name='submit'>
                    <button><a href='../logout.php'>LOGOUT</a></button>
                    
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>";



?>

