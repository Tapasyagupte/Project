<?php
// Initialize the session
session_start();
if(isset($_SESSION['id'])){
           $userid=$_SESSION['id'];
         }
          ?>


<html>
<body>

<script>

window.onscroll = function() {myFunction()};


var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;


function myFunction() {
 
 if (window.pageYOffset >= sticky) 
{
}


window.onscroll = function() {myFunction()};


var header = document.getElementById("myHeader");

var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>


<meta name="viewport" content="width=device-width, initial-scale=0.8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>





html, body {
  margin: 0px;
  padding: 0px;
  min-height: 100%;
  height: 150%;
}

.fa {
	margin-left: 140px;
  font-size: 10px;
  text-align: center;
  text-decoration: none;
  align-content: center;
  padding:8px; 
  padding-left:20px; 
}


.fa:hover {
    opacity: 0.7;
}


.fa-facebook {
  color: white;
  font-size: 1.50em;
}


.fa-twitter {
  color: white;
   font-size: 1.50em;
}


.fa-google {
  color: white;
   font-size: 1.50em;
  
}


.fa-linkedin {
  color: white;
   font-size: 1.50em;
}


.fa-youtube {
  color:white;
   font-size: 1.50em;
}


.fa-instagram {
  color: white;
  font-size: 1.50em;
}

}

#wrapper {
  background-color: #e3f2fd;
  min-height: 320%;
  height: auto !important;
  margin-bottom: -50px; }

#wrapper:after {
  content: "";
  display: block;
  height: 50px; 
}


#content {
  height: 320%;
}


#footer {
  height: 60px; 
}


#footer-content {
  background-color:black;
  border: 1px solid ;
  height: 280px; 
  padding: 8px;
}


#design1 {

     text-decoration:none;
     font-size:15px;
     text-align:center;
     
 }

a{
 text-decoration:none;
  color: white;
  padding: 40px;
}


#design2 {
    color:white;
    font-size:15px;
    text-align:center;
  }

 
#design3 {
    color:white;
    font-size:13px;
    text-align:center;
    padding-left:50px;
    padding-right:40px;
  }
  

</style>


<?php


$category = $_GET['role'];

?>
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

$sql="SELECT * FROM personalinformation where categories='$category'";

$result = mysqli_query($conn,$sql);

?>

<html>

<body style='font-size:22;text-align:left;color:white;background-image:url("finalpageimage.jpg");background-repeat:repeat-y;margin-right:11opx;margin-left:10px '>
<div id="wrapper">
 
 <div id="content">
   
<h3>

<?php
        
while($row = mysqli_fetch_assoc($result))
        
{
         
echo "Titlename=".$row["tittlename"]."<br>"."<br>";
         
 $id=$row["id"];
         

$db = mysqli_connect("localhost","root","","wikiandbio"); //keep your db name
$sql = "SELECT * FROM personalinformation WHERE id = '$id'";
$result1 = $db->query($sql);
$sth=mysqli_fetch_assoc($result1);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $sth['image'] ).'"/>'; 
echo "<td align=center width=100>
<a href='finalpage.php?role=$id'>READ MORE</a>";
         
echo "<br>";

  
}
 
  
?>

</h3>
</div>
</div>
<footer id="footer">
  <div id="footer-content">
       <hr width="200">
        <hr width="300">
          <hr width="500">
    <p id="design1">
					<a href="frontpagetrending.php">Home</a> 
					
					<a href="advertise.html">Advertise</a>  
				       
					<a href="privacy.html">Privacy/Terms</a>  
				
					<a href="contactus.html">Contact us</a>  
                           
                                          <br>	
				</p>
  

     <hr width="700">
    <p id="design2">About us</p>
     
   <p id="design3">WikiAndBio is India’s first and only media house for the Celebrity. Know all about celebrities, singer, actor, actress, YouTubers, businessman, sportsman, comedians, cricketers, politician, dancer, director, journalists, famous personalities, models, producers and more.</p>

    <hr width="700">
    <hr width="500">
      <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
  
   <hr width="500">
     
  
</div>	
</footer>
</body>
</html>



