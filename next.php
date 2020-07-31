<html>
<body>
<?PHP
	$rno=$_GET['t2'];
	$name=$_GET['t1'];
	$cno=$_GET['t3'];
	
	echo $rno,"  ",$name;
	$host=mysqli_connect("localhost","root","","student");
	if(!empty($host))
	{
			echo "connection done";
	}
	
	
	
	$sdetail="INSERT INTO studinfo(`rollno`,`name`,`contactno`) VALUES ($rno,'$name',$cno)";
	
	$result=mysqli_query($host,$sdetail);
	echo $result;
	if($result)
		echo "Data inserted";
		
	$result = mysqli_query($host,"SELECT * FROM studinfo");
?>
<table border="1">
<tr>
<th>rollno</th>
<th>Name</th>
<th>contactno</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
<td>
  <?php print $row['rollno'];
		?>
 </td>
<td>
  <?php print $row['name'];
		?>
 </td>
<td>
  <?php print $row['contactno'];
		?>
 </td>
 </tr>
 <?PHP
 }?>
</table>

</html>
