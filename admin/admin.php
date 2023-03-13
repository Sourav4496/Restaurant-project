<?php

include "../include/conn.php";

session_start();



if(isset($_POST['submit'])){ 
    $name=$_POST['name'];
    $category=$_POST['category'];
    $desc=$_POST['desc'];
    $price=$_POST['price'];
    $aval=$_POST['aval'];
    
    $img=$_FILES['img'];
    $imgname=$img['name'];
    $imgerror=$img['error'];
    $imgtempname=$img['tmp_name'];



    $imgext=explode('.',$imgname);
    $imgstrconv=strtolower(end($imgext));

    $imgextcomp=['jpg','jpeg','png'];

    if(in_array($imgstrconv,$imgextcomp)){
        $dest='../image/'.$imgname;
        move_uploaded_file($imgtempname,$dest);
    }
   
    
    $sql="INSERT INTO `userdetail` (`name` ,`category`, `descr`, `price`, `aval`,`img`) VALUES ( '$name','$category', '$desc', '$price', '$aval','$dest')";
    
    
    $result=mysqli_query($conn,$sql);
  
    
    
    
    
    
}


echo "
<!DOCTYPE html>
<html lang='en'>

    <body>
    <marquee><h1>WELCOME   ". $_SESSION['name']."</h1></marquee>
        <button><a href='../logout.php'>LOGOUT</a></button>
        <button><a href='adminpassword.php'>Password Change</a></button>

    <form  method='POST' enctype='multipart/form-data'>
        <table>
        <tr><td>
        Name: <input type='text' name='name' >
        </td></tr>
       
        <tr><td>Category:
           
        <select name='category'>
        <option value='South Indian'>South Indian</option>
        <option value='Punjabi'>Punjabi</option>
        <option value='Drinks'>Drinks</option>
        <option value='Sweets'>Sweets</option>
        </select>
        </td></tr>
        <tr><td>
            Description: <input type='text' name='desc' >
        </td></tr>
        <tr><td>
            Price : <input type='number' name='price'>
        </td></tr><tr><td>
        Availability : <input type='radio' name='aval' value='1'>Yes<input type='radio' name='aval' value='2'>No
        </td></tr>
        <tr><td>
        Upload Image:<input type='file' name='img'>
        
        </td></tr>
        <tr><td>
            <input type='submit' name='submit' value='Submit'>
            <button><a href='adminedit.php'>Show Menu</a></button>
        </td></tr>
        </table>
    </form>
    </body>
</html>";







?>
