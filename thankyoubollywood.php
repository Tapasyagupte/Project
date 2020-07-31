<?php
session_start();
$id2= $_GET['role'];

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikiandbio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE homepage SET bollywood=$id2 WHERE hid=1";


$conn->query($sql);

?>
<?php include_once'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head><style >
	.bg {
  /* The image used */
  background-image: url("userimage1.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="bg">
<h1>THANKS FOR ADDING </h1>
</body>
</html>