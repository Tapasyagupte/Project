<?php
$conn = mysqli_connect("localhost","root","","wikiandbio");
if(! empty ( $conn) )
{
	echo "connection done";
}
else
{
	echo "connection not done";
}

?>

<?php


if(isset($_POST['submit'])){


 
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
    
 

    
 
$nickname =$_POST[ 'nickname'];
   

   
    

   
 


     

 
    
 
$hobbies=$_POST['hobbies'];
    


 

      

    

   
 

  

   
 
$sql = "INSERT INTO personalinformation( categories, realname, nickname, tittlename, description, birthdate, country, zodiac sign, profession, birthplace, nationality, sunsign, religion, caste, hometown, father, mother, brother, sister, currentplace,  haircolor, eyecolor, skincolor, hobbies)   VALUES ('$categories','$realname', '$nickname', '$tittlename', '$description', '$birthdate', '$country','$zodiacsign', '$profession', '$birthplace', '$nationality', '$sunsign','$religion','$caste','$hometown', '$father', '$mother', '$brother', '$sister', '$currentplace',  '$haircolor', '$eyecolor', '$skincolor', '$hobbies')";
 
$result = mysqli_query($conn,$sql);
if(! empty ( $result) )
{
	echo "connection done";
}
else
{
	echo "connection not done";
}


}


?>
