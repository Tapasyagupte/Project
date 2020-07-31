<html>
<head>
</head>
<style>
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

.button {
  background-color: #f44336;; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button:hover {
  background-color: #008CBA; /* Green */
  color: white;
}
</style>
<body style='text-align:center ; color:black; ' class="bg" ;>
<?php include_once'header.php';?>
<h1><u>Welcome to WIKI AND BIO</u></h1>
<h1><u>Please select one of the following options:</u></h1>
<form action="userform.php">
<h2>To Add Actors information</h2>
<button type="submit" class="button">Add actor </button>
</form>
<form action="main.php">
<h2>To Update Actors information</h2>
<button type="submit" class="button">Update actor </button>
</form>
<form action="trending1.php">
<h2>To Add Hot topics</h2>
<button type="submit" class="button">Add hot topics</button>
</form>
</body>
<?php
?>


</html>