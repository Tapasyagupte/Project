<html>
<style >
.button {
  background-color: #f44336;; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: right;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button:hover {
  background-color: #008CBA; /* Green */
  color: white;
}
.bg {
  /* The image used */
  background-image: url("userimage1.jpg");

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body style='left-margin: 40px ;right-margin: 50px ;text-align: center ;background-image:url("finalpageimage.jpg");background-repeat:repeat-y;'>
<?php include_once'header.php' ;?>



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
<marquee><h1 style="color:white;font-style: italic,font-size:30px">WELCOME TO WIKIANDBIO.....No.1 BIOGRAPHY WEBSITE</h1></marquee>
<form style="background-color: lightblue;margin-right: 350px;margin-left:20px;">
<fieldset class="bg">
<legend><h1>Trending</h1></legend>


<?php
$sql="SELECT * FROM homepage where hid=1 ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id=$row["trending"];
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
<form style="background-color: lightpink;margin-right: 350px;margin-left:20px;">
<fieldset class="bg" >
<legend><h1>Hollywood</h1></legend>


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
<form style="background-color: lightgreen;margin-right: 350px;margin-left:20px;">
<fieldset class="bg">
<legend><h1>Bollywood</h1></legend>


<?php
$sql="SELECT * FROM homepage where hid=1 ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id=$row["bollywood"];
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



<?php include_once'footer.php';?>
</body>
</html>