<!DOCTYPE html>
<?php
$con = mysqli_connect('localhost','root',"","web_development");

if(!$con)
{
    echo 'not connect to the server';
}
 if($con === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
    }
  	$id = $_POST['id'];	
	 $author = $_POST['author'];
	 $heading = mysqli_real_escape_string($con, $_POST['heading']); 
	 $content = mysqli_real_escape_string($con, $_POST['content']);
	 $category = mysqli_real_escape_string($con, $_POST['category']);
	 $tags = mysqli_real_escape_string($con, $_POST['tags']);
	 $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));

	$sql = "INSERT main (Author,Images,Heading,Content,Category,Tags) VALUES ('$author','$image','$heading','$content','$category','$tags')";

	if(!mysqli_query($con,$sql))
	{
	    echo 'Not inserted';
	}
	else
	{
	    echo 'Data Inserted';
	}
	 header("refresh:3; url=first.php")
	
?>
<script type="text/javascript">
	window.location = "new.html";
</script>

