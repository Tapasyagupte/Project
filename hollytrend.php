<html>
<body>
<form >
<fieldset>
<legend><h1>Trending</h1></legend>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikiandbio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection faile d: " . mysqli_connect_error());
}
?>
<?php
$sql="SELECT * FROM homepage where hid=1 ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id=$row["hollywood"];
?>

<?php

$sql1="SELECT * FROM personalinformation where id=$id";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);

echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['image'] ).'"/>';
echo "<br>"."<br>".$row1["tittlename"]."<br>"."<br>";
echo $row1["description"]."<br>"."<br>";
 echo "<td align=center width=100><a href='finalpage.php?role=$id'>READ MORE</a>";

?>
</fieldset>
</form>
</body>
</html>