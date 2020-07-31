<?php
session_start();

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

<html>
<body>
<form name="frmUser" method="post" action="update.php">
<?php
$sql="SELECT * FROM personalinformation WHERE id='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>
<?php
$id1= $row['id'];
$_SESSION['varname'] = $id1;
?>
<INPUT TYPE="TEXT" NAME="categories" SIZE="150"  value="<?php echo $row['categories']; ?>">
<INPUT TYPE="TEXT" NAME="realname" SIZE="150"  value="<?php echo $row['realname']; ?>">
<INPUT TYPE="TEXT" NAME="nickname" SIZE="150"  value="<?php echo $row['nickname']; ?>">
<INPUT TYPE="TEXT" NAME="tittlename" SIZE="150"  value="<?php echo $row['tittlename']; ?>">
<INPUT TYPE="TEXT" NAME="description" SIZE="150"  value="<?php echo $row['description']; ?>">
<INPUT TYPE="date" NAME="birthdate" SIZE="150"  value="<?php echo $row['birthdate']; ?>">
<INPUT TYPE="TEXT" NAME="country" SIZE="150"  value="<?php echo $row['country']; ?>">
<INPUT TYPE="TEXT" NAME="zodiacsign" SIZE="150"  value="<?php echo $row['zodiacsign']; ?>">
<INPUT TYPE="TEXT" NAME="profession" SIZE="150"  value="<?php echo $row['profession']; ?>">
<INPUT TYPE="TEXT" NAME="birthplace" SIZE="150"  value="<?php echo $row['birthplace']; ?>">
<INPUT TYPE="TEXT" NAME="nationality" SIZE="150"  value="<?php echo $row['nationality']; ?>">
<INPUT TYPE="TEXT" NAME="sunsign" SIZE="150"  value="<?php echo $row['sunsign']; ?>">
<INPUT TYPE="TEXT" NAME="religion" SIZE="150"  value="<?php echo $row['religion']; ?>">
<INPUT TYPE="TEXT" NAME="caste" SIZE="150"  value="<?php echo $row['caste']; ?>">
<INPUT TYPE="TEXT" NAME="hometown" SIZE="150"  value="<?php echo $row['hometown']; ?>">
<INPUT TYPE="TEXT" NAME="father" SIZE="150"  value="<?php echo $row['father']; ?>">
<INPUT TYPE="TEXT" NAME="brother" SIZE="150"  value="<?php echo $row['brother']; ?>">
<INPUT TYPE="TEXT" NAME="mother" SIZE="150"  value="<?php echo $row['mother']; ?>">
<INPUT TYPE="TEXT" NAME="sister" SIZE="150"  value="<?php echo $row['sister']; ?>">
<INPUT TYPE="TEXT" NAME="currentplace" SIZE="150"  value="<?php echo $row['currentplace']; ?>">
<INPUT TYPE="TEXT" NAME="haircolor" SIZE="150"  value="<?php echo $row['haircolor']; ?>">
<INPUT TYPE="TEXT" NAME="eyecolor" SIZE="150"  value="<?php echo $row['eyecolor']; ?>">
<INPUT TYPE="TEXT" NAME="skincolor" SIZE="150"  value="<?php echo $row['skincolor']; ?>">
<INPUT TYPE="TEXT" NAME="hobbies" SIZE="150"  value="<?php echo $row['hobbies']; ?>">

<Br>
<br>
<?php
$sql="SELECT * FROM favorites WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>

<INPUT TYPE="TEXT" NAME="fauthors" SIZE="150"  value="<?php echo $row['fauthors']; ?>">
<INPUT TYPE="TEXT" NAME="fbook" SIZE="150"  value="<?php echo $row['fbook']; ?>">
<INPUT TYPE="TEXT" NAME="factor" SIZE="150"  value="<?php echo $row['factor']; ?>">
<INPUT TYPE="TEXT" NAME="factress" SIZE="150"  value="<?php echo $row['factress']; ?>">
<INPUT TYPE="TEXT" NAME="fmovie" SIZE="150"  value="<?php echo $row['fmovie']; ?>">
<INPUT TYPE="TEXT" NAME="fband" SIZE="150"  value="<?php echo $row['fband']; ?>">
<INPUT TYPE="TEXT" NAME="ftvshow" SIZE="150"  value="<?php echo $row['ftvshow']; ?>">
<INPUT TYPE="TEXT" NAME="fplace" SIZE="150"  value="<?php echo $row['fplace']; ?>">
<INPUT TYPE="TEXT" NAME="fbeverages" SIZE="150"  value="<?php echo $row['fbeverages'];?>">
<INPUT TYPE="TEXT" NAME="fcuisines" SIZE="150"  value="<?php echo $row['fcuisines'];?>">

<br>
<br>
<?php
$sql="SELECT * FROM address WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>

<INPUT TYPE="TEXT" NAME="homeaddress" SIZE="150"  value="<?php echo $row['homeaddress']; ?>">
<INPUT TYPE="TEXT" NAME="phoneno" SIZE="150"  value="<?php echo $row['phoneno']; ?>">
<INPUT TYPE="TEXT" NAME="email" SIZE="150"  value="<?php echo $row['email'];?>">
<INPUT TYPE="TEXT" NAME="website" SIZE="150"  value="<?php echo $row['website'];?>">

<br>
<br>
<?php
$sql="SELECT * FROM bodymeasure WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>

<INPUT TYPE="TEXT" NAME="height" SIZE="150"  value="<?php echo $row['height'];?>">
<INPUT TYPE="TEXT" NAME="weight" SIZE="150"  value="<?php echo $row['weight'];?>">

<br>
<br>
<?php
$sql="SELECT * FROM education WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>
<INPUT TYPE="TEXT" NAME="school" SIZE="150"  value="<?php echo $row['school']; ?>">
<INPUT TYPE="TEXT" NAME="college" SIZE="150"  value="<?php echo $row['college'];?>">
<INPUT TYPE="TEXT" NAME="qaulification" SIZE="150"  value="<?php echo $row['qaulification'];?>">


<br>
<br>
<?php
$sql="SELECT * FROM flimandshow WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>
<INPUT TYPE="TEXT" NAME="tvshow" SIZE="150"  value="<?php echo $row['tvshow']; ?>">
<INPUT TYPE="TEXT" NAME="realityshow" SIZE="150"  value="<?php echo $row['realityshow']; ?>">
<INPUT TYPE="TEXT" NAME="movies" SIZE="150"  value="<?php echo $row['movies']; ?>">
<INPUT TYPE="TEXT" NAME="debutmovie" SIZE="150"  value="<?php echo $row['debutmovie']; ?>">
<INPUT TYPE="TEXT" NAME="debuttvshow" SIZE="150"  value="<?php echo $row['debuttvshow']; ?>">
<INPUT TYPE="TEXT" NAME="debutsinging" SIZE="150"  value="<?php echo $row['debutsinging'];?>">
<INPUT TYPE="TEXT" NAME="bestmovie" SIZE="150"  value="<?php echo $row['bestmovie'];?>">

  
  <br>
  <br>
<?php
$sql="SELECT * FROM moneyfactor WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>
<INPUT TYPE="TEXT" NAME="salary" SIZE="150"  value="<?php echo $row['salary'];?>">
<INPUT TYPE="TEXT" NAME="annualincome" SIZE="150"  value="<?php echo $row['annualincome'];?>">
 

<br>
<br>
<?php
$sql="SELECT * FROM status WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>

<INPUT TYPE="TEXT" NAME="mstatus" SIZE="150"  value="<?php echo $row['mstatus']; ?>">
<INPUT TYPE="TEXT" NAME="affaire" SIZE="150"  value="<?php echo $row['affaire']; ?>">
<INPUT TYPE="TEXT" NAME="spouse" SIZE="150"  value="<?php echo $row['spouse']; ?>">
<INPUT TYPE="TEXT" NAME="son" SIZE="150"  value="<?php echo $row['son'];?>">
<INPUT TYPE="TEXT" NAME="daughter" SIZE="150"  value="<?php echo $row['daughter'];?>">




<br>
<br>
<?php
$sql="SELECT * FROM socialmedia WHERE pid='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_array($result);
?>

      <INPUT TYPE="TEXT" NAME="facebook" SIZE="150" placeholder="Enter facebook" value="<?php echo $row['facebook'];?>"> 
       <INPUT TYPE="TEXT" NAME="twitter" SIZE="150"  value="<?php echo $row['twitter']; ?>">
       <INPUT TYPE="TEXT" NAME="instagram" SIZE="150"  value="<?php echo $row['instagram']; ?>">
    	<INPUT TYPE="TEXT" NAME="youtube" SIZE="150" value="<?php echo $row['youtube']; ?>">
    	<INPUT TYPE="TEXT" NAME="myspace" SIZE="150" value="<?php echo $row['myspace']; ?>">
    	<INPUT TYPE="TEXT" NAME="wikipedia" SIZE="150"  value="<?php echo $row['wikipedia']; ?>">


<br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</body>
</html>
