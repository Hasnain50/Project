<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'connection.php';
$query1="SELECT * from Category";
$result1=mysqli_query($conn,$query1);


?>
<form method="POST">
	<label>Enter Product Name : </label>
	<input type="text" name="txtName"/>
	<br>
	<label>Enter Category</label>
	<input type="text" name="txtCategory"/>
	<select name="dCategory">
			
			<?php
            if($result1)
            {
                while($row=mysqli_fetch_array($result1))
                {
                    //echo "<option value='".$row['C_Id']."'>".$row['C_Name']."</option>";
            ?>
                <option value="<?php echo $row['C_ID'];?>"><?php echo $row['C_NAME']?></option>
            <?php
                }
            }
            ?>
        </select>
        
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
//include 'connection.php';
if(isset($_POST['btnsubmit']))
{
$pName=$_POST['txtName'];
$pCategory=$_POST['txtCategory'];
$pPrice=$_POST['txtPrice'];
$pQuantity=$_POST['txtQuantity'];


$query= "INSERT INTO Product (`P_NAME`,`P_CATEGORY`,`P_PRICE`,`P_QUANTITY`) VALUES
('$pName','$pCategory','$pPrice','$pQuantity')";

$result=mysqli_query($conn,$query);
if($result)
{
	//echo "Data Inserted";

}else{
	echo "Error : ".mysqli_error($conn);
}

}
?>

</body>
</html>