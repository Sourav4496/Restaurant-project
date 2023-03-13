<?php
include "../include/conn.php";
session_start();

    $ied=$_SESSION['id'];

    $sql="select name,category,time,price,img from `items` inner join `userdetail` on items.orders=userdetail.id WHERE `uid`=$ied and `aval`=1";
    $result=mysqli_query($conn,$sql);

    $start=1;

    echo "<!DOCTYPE html>
        <body>
        <table border='2'>
        <h1>My Orders</h1>
        ";while($row=mysqli_fetch_assoc($result)){ 
   
            // die;
            echo"
            <tr>
            <th>". $start++."</th>
            <td>"
            .$row['name']."
            
            </td>
            <td>".$row['category']."</td>
            <td>
                ".$row['time']."
            </td>
            <td>
            ".$row['price']."
        </td>
        <td>
            <img src='".$row['img']."' height=150px width=150px >
        </td>
            </tr>";
        }
        echo"
        </table>  <button><a href='../logout.php'>LOGOUT</a></button>
        <button><a href='customer.php'>Back</a></button>
        </body>
    </html>";

?>


