<?php
session_start();
?>

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
$sql="SELECT * FROM personalinformation ";
$result = mysqli_query($conn,$sql);
?>
<html>
<style >
    .bg {
  /* The image used */
  background-image: url("userimage1.jpg");
  background-repeat:repeat-y;

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  
  background-size: cover;
}
</style>
<body style='text-align:center ;color:black;'class='bg'>
	<?php include_once'header.php';?>
<h3>
<?php
        while($row = mysqli_fetch_assoc($result))
        {
         
         echo $row["tittlename"];
         $id=$row["id"];
         echo "<td align=center width=100><a href='thankyoutrending.php?role=$id'>SELECT</a>";
         echo "<br>";

     }
     ?>