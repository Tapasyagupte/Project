<?php
session_start();
$id1= $_SESSION['varname'];

?>

<?php
$connection = mysqli_connect("localhost","root","","wikiandbio");
 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
 $categories=$_POST[ 'categories'];
  
 $realname=$_POST['realname'];
    $nickname=$_POST['nickname'];
    $tittlename =$_POST[ 'tittlename'];
    $description=$_POST['description'];
    $birthdate= $_POST['birthdate']; 
   $country= $_POST['country'];
   $zodiacsign =$_POST['zodiacsign'];
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
   
 $query = mysqli_query($connection,"UPDATE personalinformation SET categories= '$categories', realname= '$realname', nickname= '$nickname', tittlename='$tittlename', description='$description', birthdate= '$birthdate', country= '$country', zodiacsign= '$zodiacsign', profession= '$profession' , birthplace= '$birthplace', nationality= '$nationality', sunsign= '$sunsign', religion= '$religion', caste= '$caste', hometown= '$hometown', father= '$father', mother= '$mother', brother= '$brother', sister= '$sister', currentplace= '$currentplace',  haircolor= '$haircolor', eyecolor= '$eyecolor', skincolor= '$skincolor', hobbies= '$hobbies' WHERE id='$id1' ");



}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
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
</style>
<body style='font-size:28; background-image:url("userimage1.jpg");background-repeat:repeat-y;' >
<?php include_once'header.php' ;?>
<h1 style="text-align:center">Actor information updated</h1>
<br>
<br>
<form action="main.php">
<h2>To Update Actors information</h2>
<button type="submit" class="button">Update actor </button>
</form>
</body>
</html>

