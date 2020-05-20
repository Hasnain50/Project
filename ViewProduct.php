<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'connection.php';
$query="Select * from Product";
$result=mysqli_query($conn,$query);
?>
<div class="container">
<a href="AddProducts.php"><button class="btn btn-success">Add Product</button></a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
       </tr>
    </thead>
    <tbody>
    <?php
        if($result)
        {
            while($row=mysqli_fetch_array($result))
            {       
    ?>
    <!-- mysqli_fecth_array   both
    mysqli_fetch_assoc   string
    mysqli_fetch_row     int
    $arr[0]
    $arr[1]
    $arr['name']
    $arr['fname'] -->
      <tr>
        <td><?php echo $row['B_ID']?></td>
        <td><?php echo $row['B_NAME']?></td>
        <?php 
            $cId=$row['P_Category'];
            $query1="Select * from category where C_ID='$cId'";
            $result1=mysqli_query($conn,$query1);
            if($result1)
            {
               $row1=mysqli_fetch_row($result1); 
            
        ?>
        <td><?php echo $row1[1];?></td>
        <?php 
            } 
        ?>
        <td><?php echo $row['B_Price']?></td>
       <td><?php echo $row['B_Quantity']?></td>
       <td><a href="View.php?id=<?php echo $row['B_Id']?>"><img src="view.png" width="20px" height="20px"/></a>
        <a href="Edit.php?id=<?php echo $row['B_Id']?>"><img src="pencil.png" width="20px" height="20px"/></a>
        <a href="Delete.php?id=<?php echo $row['B_Id']?>"><img src="delete.png" width="20px" height="20px"/></a>
        </td>
      </tr>
      <?php
            }
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>