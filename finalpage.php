<html>



<script>

window.onscroll = function() {myFunction()};


var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;



function myFunction() {
 
 if (window.pageYOffset >= sticky) 
{
    navbar.classList.add("sticky")
  }
 else {
    navbar.classList.remove("sticky");
  }

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
<style>

<meta name="viewport" content="width=device-width, initial-scale=0.8">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  margin: 0;
  background-image: url(11.jpg);
  background-size:100%;
}


.header {
  background:yellow;
  padding: 30px;

  text-align: center;
  height:100px;
}

.top-container {
  background-color:#f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: black;
}


#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


#navbar a:hover {
  background-color: #ddd;
  color: black;
}


#navbar a.active {
  background-color:grey;
  color: white;
}


.content {
  padding: 16px;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}


.sticky + .content {
  padding-top: 60px;
}


img {
  image-rendering: auto;
  image-rendering: crisp-edges;
  image-rendering: pixelated;
}


.myheader {
  padding: 10px 16px;
  img src
  color:white;
}



html, body {
  margin: 0px;
  padding: 0px;
  min-height: 100%;
  height: 150%;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
    box-sizing: border-box;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
    box-sizing: border-box;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: gray;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color:#f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
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
  min-height: 400%
  height: auto !important;
  margin-bottom: -50px; }

#wrapper:after {
  content: "";
  display: block;
  height: 50px; 
}


#content {
  height: 400%;
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
<body style='font-size:28;text-align:left; color: white; background-image:url("finalpageimage.jpg");background-repeat:repeat-y;' >
<div id="wrapper" >
 
 <div id="content">
 
<?php include_once'header.php';?>
  <div style="margin-left: 30px;margin-right: 110px;">
<?php

$id2= $_GET['role'];



?>


<?php

$db = mysqli_connect("localhost","root","","wikiandbio"); //keep your db name
$sql = "SELECT * FROM personalinformation WHERE id = '$id2'";
$result1 = $db->query($sql);
$sth=mysqli_fetch_assoc($result1);
echo "<br"."<br>";
echo "<br"."<br>" .'<img src="data:image/jpeg;base64,'.base64_encode( $sth['image'] ).'"/>'; 
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

$sql="SELECT * FROM personalinformation where id=$id2";

$result = mysqli_query($conn,$sql);


?>








  
<h3><u>ACTOR INFORMATION</u></h3>

<br>  
<?php
 
 $sql="SELECT * FROM personalinformation where id=$id2";

$result = mysqli_query($conn,$sql);

     
 $row = mysqli_fetch_assoc($result);  
       
echo "Realname  :-".$row["realname"]."<br>"."<br>";
        
echo "Nickname  :-".$row["nickname"]."<br>"."<br>";
        
echo "Country   :-".$row["country"]."<br>"."<br>";
        
echo "Zodiacsign  :-".$row["sunsign"]."<br>"."<br>";
      
 ?>
 
    

       
<h3><u>Personal Life</u></h3>
        
<?php
       
 $sql="SELECT * FROM personalinformation where id=$id2";

$result = mysqli_query($conn,$sql);

  
    $row = mysqli_fetch_assoc($result); 
      
  echo "Birthdate :-".$row["birthdate"]."<br>"."<br>";
      
  echo "Birthplace  :-".$row["birthplace"]."<br>"."<br>";
    
    echo "Sunsign  :-".$row["sunsign"]."<br>"."<br>";
      
  echo "Nationality  :-".$row["nationality"]."<br>"."<br>";
    
    echo "Hometown :-".$row["hometown"]."<br>"."<br>";
       
 echo "Father  :-".$row["father"]."<br>"."<br>";
       
 echo "Mother  :-".$row["mother"]."<br>"."<br>";
        
echo "Brother  :-".$row["brother"]."<br>"."<br>";
         
echo "Sister  :-".$row["sister"]."<br>"."<br>";
        
echo "Religion  :-".$row["religion"]."<br>"."<br>";
      
  echo "Address  :-".$row["address"]."<br>"."<br>";
       
 echo "Hobbies   :-".$row["hobbies"]."<br>"."<br>";
        
echo "Eye color  :-".$row["eyecolor"]."<br>"."<br>";
        
echo "Haircolor  :-".$row["haircolor"]."<br>"."<br>";
      
 ?>



       
 <h3><u>Bodymeasure</u></h3>height  chest biceps  waist weight

     
  <?php
                
 $sql="SELECT * FROM bodymeasure where pid=$id2";
            
     $result = mysqli_query($conn,$sql);
                 
 $row = mysqli_fetch_assoc($result); 
              
 echo "Height :-".$row["height"]."<br>"."<br>";
              
 echo "Weight  :-".$row["weight"]."<br>"."<br>";
              
 echo "Biceps  :-".$row["biceps"]."<br>"."<br>";
             
 echo "Waist  :-".$row["waist"]."<br>"."<br>";
        
echo "Chest   :-".$row["chest"]."<br>"."<br>";

       
?>

      
      
<h3>Education</h3>
       
<?php
                
 $sql="SELECT * FROM education where pid=$id2";
               
  $result = mysqli_query($conn,$sql);
                  
$row = mysqli_fetch_assoc($result); 
              
 echo "School :-".$row["school"]."<br>"."<br>";
               
echo "College  :-".$row["college"]."<br>"."<br>";
               
echo "Qualification  :-".$row["qaulification"]."<br>"."<br>";
     

      
 ?>

      
<h3><u>Flim and shows</u></h3>

     
       
 <?php
                
 $sql="SELECT * FROM flimandshow where pid=$id2";
                
 $result = mysqli_query($conn,$sql);
                  
$row = mysqli_fetch_assoc($result); 
               
echo "Tvshow :-".$row["tvshow"]."<br>"."<br>";
               
echo "Realityshow  :-".$row["realityshow"]."<br>"."<br>";
               
echo "Movies  :-".$row["movies"]."<br>"."<br>";
                
echo "Debutmovie :-".$row["debutmovie"]."<br>"."<br>";
             
  echo "Debuttvshow  :-".$row["debuttvshow"]."<br>"."<br>";
               
echo "Debutsinging :-".$row["debutsinging"]."<br>"."<br>";
              
 echo "Bestmovie   :-".$row["bestmovie"]."<br>"."<br>";
         
 ?>
    
 <h3> FAVOURITE</h3>
  

       
 <?php
              
 $sql="SELECT * FROM favorites where pid=$id2";
               
$result = mysqli_query($conn,$sql);
              
 $row = mysqli_fetch_assoc($result);  
               
echo "Fauthors :-".$row["fauthors"]."<br>"."<br>";
              
 echo "Fbook  :-".$row["fbook"]."<br>"."<br>";
              
 echo "Factor  :-".$row["factor"]."<br>"."<br>";
               
echo "Factress :-".$row["factress"]."<br>"."<br>";
               
echo "Fovie  :-".$row["fmovie"]."<br>"."<br>";
              
 echo "Fand :-".$row["fband"]."<br>"."<br>";
               
echo "Ftvshow   :-".$row["ftvshow"]."<br>"."<br>";
              
 echo "Fplace  :-".$row["fplace"]."<br>"."<br>";
              
 echo "Fbeverages :-".$row["fbeverages"]."<br>"."<br>";
               
echo "Fcuisines   :-".$row["fcuisines"]."<br>"."<br>";
          
?>
   
<h3><u> Money factor</u></h3>


        
<?php
               
$sql="SELECT * FROM moneyfactor where pid=$id2";
               
$result = mysqli_query($conn,$sql);
              
 $row = mysqli_fetch_assoc($result);  
               
echo "Salary :-".$row["salary"]."<br>"."<br>";
               
echo "Anualincome  :-".$row["annualincome"]."<br>"."<br>";

       
 ?>


     
            
<h3>Boyfriends, Affairs and More</h3>
              
       
  <?php
               
$sql="SELECT * FROM status where pid=$id2";
              
 $result = mysqli_query($conn,$sql);
               
$row = mysqli_fetch_assoc($result); 
               
echo "Marriage  status :-".$row["mstatus"]."<br>"."<br>";
               
echo "Affaire  :-".$row["affaire"]."<br>"."<br>";
              
 echo "Spouse :-".$row["spouse"]."<br>"."<br>";
              
 echo "Son :-".$row["son"]."<br>"."<br>";
               
echo "Daughter  :-".$row["daughter"]."<br>"."<br>";
              
 
              
 ?>
             

    
 <h3><u> Social Handles</u> </h3>

         
 <?php
             
  $sql="SELECT * FROM socialmedia where pid=$id2";
           
    $result = mysqli_query($conn,$sql);
              
 $row = mysqli_fetch_assoc($result);  
             
  echo "facebook :-".$row["facebook"]."<br>"."<br>";
               
echo "twitter  :-".$row["twitter"]."<br>"."<br>";
               
echo "instagram  :-".$row["instagram"]."<br>"."<br>";
              
 echo "youtube :-".$row["youtube"]."<br>"."<br>";
              
 echo "wikipedia  :-".$row["wikipedia"]."<br>"."<br>";
              
 echo "myspace :-".$row["myspace"]."<br>"."<br>";

         
 ?>
</div>
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



       

