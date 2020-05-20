<?php
if(isset($_GET['ID']))
{
    $id=$_GET['ID'];
    include 'connection.php';
    $query="Delete from Product where P_ID='$id'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header("Location:ViewProduct.php");
    }else{
        echo "Error : ".mysqli_error($conn);
    }
}
?>