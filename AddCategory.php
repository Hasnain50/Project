<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form method="POST">
    <label>Enter Name</label>
    <input type="text" name="txtName"/>
    <br>
    <label>Enter Description</label>
    <input type="text" name="txtDescription"/>
    <br>
        
    <input type="submit" name="btnsubmit" value="Add Category"/>
 </form>

 <?php
 include "connection.php";
 if(isset($_POST['btnsubmit']))
 {
 $cat=$_POST['txtName'];
 $des=$_POST['txtDescription'];
  $query="INSERT into Category(C_NAME),(C_DESCRIPTION)value('$cat'),('$des')";
  $result=mysqli_query($conn,$query);
  if($result)
  {
      echo "Data Inserted";
  }else{
      echo "Error : ".mysqli_error($conn);
  }
 }
 ?>

</body>
</html>