<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM personalinformation");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="">
<title>update data</title>
</head>
<style >
	
	.bg {
  /* The image used */
  background-image: url("userimage1.jpg");
  background-repeat:repeat-y;

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body style='color:black;'class='bg'>
	<?php include_once'header.php';?>
	<br><br>
	<br>
	<br>
<table>
<tr>
<td> Id</td>
<td>Tittle Name</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["tittlename"]; ?></td>
<td><a tyep='button' href="updatemain1.php?id=<?php echo $row["id"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>