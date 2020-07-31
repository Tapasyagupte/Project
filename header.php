<!--#include file="include_workingfront(1).html"-->
<html>

<body>





<meta name="viewport" content="width=device-width, initial-scale=0.8">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

header {
    height: 150px;
  width: 2000%;
    background-image: url("bgheader2.jpg");
    
}

header h1 {
    margin: 0;
}

body {
  margin: 0;
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
  img src;
 color: white;
}

.navbar {
  overflow: hidden;
  background-color: black;
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

    
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;

  
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 14px; 
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
  min-width: 150px;
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



</style>


<div id="navbar">
 
 <a class="active" href="frontpagetrending.php">
Home</a>
  <a href="admin interface.php">Admin</a>

  <a href="contactus.html">Contact</a>
  <a href="indez.php">Search</a>
    <a href="homemain.php">Login</a>

</div>
<?php 
 ?>

<div class="header" style="background-image: url(bgheader2.jpg)" id="myHeader">
 
 <h1><b style="color:white"><span style="background-color: black">WIKI AND BIO</span></b></h1>

</div>
<div class="navbar">
  <a href="frontpagetrending.php">Home</a>
  <a href="redirect.php?role=Hollywood">Hollywood</a>
  <a href="redirect.php?role=Bollywood">Bollywood</a>
  <a href="redirect.php?role=Television">Television</a>| 
  <a href="redirect.php?role=BigBoss">BigBoss</a>
  <a href="redirect.php?role=BusinessMan">BusinessMan</a>
  <a href="redirect.php?role=Sports">Sports</a>
  <a href="redirect.php?role=Politician">Politician</a>
  <a href="redirect.php?role=Singer">Singer</a>
  <a href="redirect.php?role=Model">Model</a>
  <div class="dropdown">
    <button class="dropbtn">Others 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="redirect.php?role=Comedian">Comedian</a>
      <a href="redirect.php?role=Youtuber">Youtuber</a>
      <a href="redirect.php?role=Wrestler">Wrestler</a>
      <a href="redirect.php?role=Pornstar">Pornstar</a>
    </div>
  </div>
</div>



</body>
</html>

