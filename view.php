<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    include 'connection.php';
    $query="SELECT * from Product where P_ID='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_row($result);
}
?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name : </th>
                <td><?php echo $row[2]?></td>
            </tr>
            <tr>
                <th>Category : </th>
                <td><?php echo $row[1]?></td>
            </tr>
            <tr>
                <th>Price : </th>
                <td><?php echo $row[3]?></td>
            </tr>
            <tr>
                <th>Quantity : </th>
                <td><?php echo $row[5]?></td>
            </tr>
    </table>
</thead>
</div>
</body>
</html>