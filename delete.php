<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $sql ="Delete from `info` where id=$id ";
    $result =mysqli_query($conn,$sql);
    if($result){

      
        header('location:show.php');
        echo '<script>alert("litliugkjhiutiggufytfdytvyug")</script>';
  

    }else{
        die(mysqli_error($conn));
    }
}




?>
