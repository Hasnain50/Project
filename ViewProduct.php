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
$query="SELECT * from Product";
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
    <tr>
        <td><?php echo $row['P_ID']?></td>
        <td><?php echo $row['P_NAME']?></td>
            <?php
        $cId=$row['P_CATEGORY'];
        $query1="SELECT * FROM CATEGORY where C_ID='$cId'";
        $result1=mysqli_query($conn,$query1);
        if($result1)
        {
            $row=mysqli_fetch_row($result1);
        ?>
        <td><?php echo $row1[1];?></td>
        <?php
           }
        ?>
        <td><?php echo $row['P_PRICE']?></td>
        <td><?php echo $row['P_QUANTITY']?></td>   
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