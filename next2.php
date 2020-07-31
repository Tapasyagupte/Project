<html>
<?PHP
$host = mysqli_connect("localhost", "root", "","student");          
   
if (isset($_POST['post_id'])) {
         $post_id = $_POST['post_id'];
		 echo $post_id;}
if (isset($_POST['delete_id'])) {
				$que="DELETE FROM `studinfo` WHERE `rollno`=$post_id";
				echo $que;
             $result=mysqli_query($host,$que);
			 echo "Data deleted*************",$result;
         }
     
	 ?>
	 </html>
