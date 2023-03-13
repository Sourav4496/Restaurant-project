<?php
include "../include/conn.php";

$action = $_POST['action'];


    if($action=="cat"){

        $cat = $_POST['cat'];
    
        $sql="SELECT `id`, `name` FROM `userdetail` WHERE `category`= '$cat'";
        $res=mysqli_query($conn,$sql); 
    
        $option='';
        foreach($res as $r){
            $option .= "<option value=" . $r['id'] . ">" . $r['name'] . "</option>";
        }
            echo "Items:<select id='cate' name='item'><option>--Select--</option>".$option."</select>";
    }
    if($action=="price"){
        $item=$_POST['item'];
        $sql1="SELECT `price`,`name` FROM `userdetail` WHERE `id`=$item";
        $res1=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($res1);
            echo "Price:<span id='' value='".$row['name']."'>".$row['price']."</span>";

    // }

}
