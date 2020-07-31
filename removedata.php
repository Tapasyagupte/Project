<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikiandbio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM personalinformation";
$result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html>
<body>
	<?php
      $row = mysqli_fetch_assoc($result);
       echo "Tittlename=".$row["tittlename"]."<br>";
        echo "Realname=".$row["realname"]."<br>";	
         echo "Nickname=".$row["nickname"];
	?>

</body>
</html> 




