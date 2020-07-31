<html>
<head></head>
<style>
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
<body style='text-align:center ; color:black;'class='bg'>
  <?php include_once'header.php';?>
<h1>Select what to add</h1>
<h2>Trending</h2>
<form action="trending.php">
<button class="button">Trending</button>
</form>
<h2>Bollywood</h2>
<form action="bollywood.php">
<button class="button">Bollywood</button>
</form>
<h2>Hollywood</h2>
<form action="hollywood.php">
<button class="button">Hollywood</button>
</form>
</body>
</html>
