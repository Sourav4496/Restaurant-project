<?php

include("../include/conn.php");

session_start();

$sql="select * from `userdetail`";

     $result=mysqli_query($conn,$sql);  

$x=1;

echo "<!DOCTYPE html>

        <body>
    
            <table border='2'>
                ";while($row=mysqli_fetch_assoc($result)){ 
                    echo"
                        <tr>
                        <th>NO". $x++."</th>
        
                        <td>Item:". $row['name']."</td>
        
                        <td>Description:". $row['descr']."</td>
     
                        <td>Price:". $row['price']."</td>
        
                        <td>Availablity:"; 
                            if($row['aval']==1){echo 'Yes';}
                            if($row['aval']==2){echo 'No';}
                            echo"</td>
       
                        <td>Category:".$row['category']. 
                        "</td>
                        <td>
                        <img src='".$row['img']."' height=150px width=150px >
                    </td>
                        </tr>";
                    }
                    echo"
                    </table>  <button><a href='../logout.php'>LOGOUT</a></button>
                    <button><a href='admin.php'>Back</a></button>



        </body>
    </html>";

?>
