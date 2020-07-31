<?php
$connection = mysqli_connect("localhost","root","","wikiandbio");
if(! empty ( $connection) )
{
	echo "connection done";
}
else
{
	echo "connection not done";
} // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
 $categories=$_POST[ 'categories'];
 $realname=$_POST['realname'];
    $nickname=$_POST['nickname'];
    $tittlename =$_POST[ 'tittlename'];
    $description=$_POST['description'];
    $birthdate= $_POST['birthdate']; 
   $country= $_POST['country'];
   $zodiacsign =$_POST[ 'zodiacsign'];
 $profession =$_POST['profession'];
 $birthplace= $_POST[ 'birthplace'];
  $nationality =$_POST[ 'nationality'];
$sunsign =$_POST['sunsign'];
 $religion =$_POST[ 'religion'];
$caste= $_POST['caste'];
 $hometown= $_POST[ 'hometown'];
   $father=$_POST[ 'father'];
    $mother =$_POST['mother'];
    $brother =$_POST[ 'brother'];
   $sister=$_POST[ 'sister'];
   $currentplace=$_POST[ 'currentplace'];
    $skincolor= $_POST[ 'skincolor'];
 $eyecolor = $_POST['eyecolor'];
    $haircolor=$_POST[ 'haircolor'];
    $hobbies=$_POST[ 'hobbies'];
   
   $homeaddress=$_POST['homeaddress'];
   $phoneno=$_POST['phoneno'];
   $email=$_POST['email'];
   $website=$_POST['website'];
   $height=$_POST['height'];
   $chest=$_POST['chest'];
   $biceps=$_POST['biceps'];
   $waist=$_POST['waist'];
   $weight=$_POST['weight'];
   $school=$_POST['school'];
   $college=$_POST['college'];
   $qaulification=$_POST['qaulification'];
   $fauthors=$_POST['fauthors'];
   $fbook=$_POST['fbook'];
   $factor=$_POST['factor'];
   $factress=$_POST['factress'];
   $fmovie=$_POST['fmovie'];
   $fband=$_POST['fband'];
   $ftvshow=$_POST['ftvshow'];
   $fplace=$_POST['fplace'];
   $fbeverages=$_POST['fbeverages'];
   $fcuisines=$_POST['fcuisines'];
   $tvshow=$_POST['tvshow'];
   $realityshow=$_POST['realityshow'];
   $movies=$_POST['movies'];
   $debutmovie=$_POST['debutmovie'];
   $debuttvshow=$_POST['debuttvshow'];
   $debutsinging=$_POST['debutsinging'];
   $bestmovie=$_POST['bestmovie'];
   $debutsinging=$_POST['debutsinging'];
   $salary=$_POST['salary'];
   $annualincome=$_POST['annualincome'];
   $facebook=$_POST['facebook'];
   $twitter=$_POST['twitter'];
   $instagram=$_POST['instagram'];
  $youtube=$_POST['youtube'];
  $wikipedia=$_POST['wikipedia'];
  $myspace=$_POST['myspace'];
  $mstatus=$_POST['mstatus'];
  $affaire=$_POST['affaire'];
  $spouse=$_POST['spouse'];
  $son=$_POST['son'];
  $daughter=$_POST['daughter'];
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  
 
$query = mysqli_query($connection,"insert into personalinformation(categories, realname, nickname, tittlename, description, birthdate, country, zodiacsign, profession, birthplace, nationality, sunsign, religion, caste, hometown, father, mother, brother, sister, currentplace,  haircolor, eyecolor, skincolor, hobbies, image) values ('$categories','$realname', '$nickname', '$tittlename', '$description', '$birthdate', '$country','$zodiacsign', '$profession', '$birthplace', '$nationality', '$sunsign','$religion','$caste','$hometown', '$father', '$mother', '$brother', '$sister', '$currentplace',  '$haircolor', '$eyecolor', '$skincolor', '$hobbies' , '$image')");
if(! empty ( $query) )
{
  echo "connection done";
}

$pid=mysqli_insert_id($connection);
 $query1 = mysqli_query($connection,"insert into address(pid,homeaddress,phoneno,email,website)values('$pid','$homeaddress','$phoneno','$email','$website')");
 $query2 = mysqli_query($connection,"insert into bodymeasure(pid,height,chest,biceps,waist,weight)values('$pid','$height','$chest','$biceps','$waist','$weight')");
 $query3 = mysqli_query($connection,"insert into education(pid,school,college,qaulification)values('$pid','$school','$college','$qaulification')");
 $query4 = mysqli_query($connection,"insert into favorites(pid,fauthors,fbook,factor,factress,fmovie,fband,ftvshow,fplace,fbeverages,fcuisines)values('$pid','$fauthors','$fbook','$factor','$factress','$fmovie','$fband','$ftvshow','$fplace','$fbeverages','$fcuisines')");
 $query5 = mysqli_query($connection,"insert into flimandshow(pid,tvshow,realityshow,movies,debutmovie,debuttvshow,debutsinging,bestmovie)values('$pid','$tvshow','$realityshow','$movies','$debutmovie','$debuttvshow','$debutsinging','$bestmovie')");
 $query6 = mysqli_query($connection,"insert into moneyfactor(pid,salary,annualincome)values('$pid','$salary','$annualincome')");
 $query7 = mysqli_query($connection,"insert into socialmedia(pid,facebook,twitter,instagram,youtube,wikipedia,myspace)values('$pid','$facebook','$twitter','$instagram','$youtube','$wikipedia','$myspace')");
 $query8 = mysqli_query($connection,"insert into status(pid,mstatus,affaire,spouse,son,wikipedia,myspace)values('$pid','$mstatus','$affaire','$spouse','$son','$daughter','$myspace')");

}
?>
<html>
<head></head>
  <body>
    <?php include_once'header.php';?>
    <h1>Actor added</h1>
  </body>
</html>
