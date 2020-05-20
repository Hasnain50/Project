<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
	<label>Enter Product Name : </label>
	<input type="text" name="txtName"/>
	<br>
	<label>Enter Category</label>
	<input type="text" name="txtCategory"/>
	<br>
	<label>Enter Price</label>
	<input type="text" name="txtPrice"/>
	<br>
	<label>Enter Quantity</label>
    <input type="text" name="txtQuantity"/>
    <br>
    <input type="submit" name="btnsubmit" value="Add Product"/>
</form>        

<?php
include 'connection.php';
if(isset($_POST['btnsubmit']))
{
$pName=$_POST['txtName'];
$pCategory=$_POST['txtCategory'];
$pPrice=$_POST['txtPrice'];
$pQuantity=$_POST['txtQuantity'];

//echo "Name : ".$pName;
//echo "Category : ".$pCategory;

$query= "INSERT INTO Product (`P_NAME`,`P_CATEGORY`,`P_PRICE`,`P_QUANTITY`) VALUES
('$pName','$pCategory','$pPrice','$pQuantity')";
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