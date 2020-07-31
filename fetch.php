<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "wikiandbio");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM personalinformation 
  WHERE tittlename LIKE '%".$search."%'
";
$result = mysqli_query($connect, $query);



 while($row = mysqli_fetch_array($result))
 {

  $output .= '
   <tr>
    <td><a href="finalpage.php?role='.$row['id'].'">'.$row["tittlename"].'</a></td>
 
   </tr>
  ';
 }
 echo $output;

}
?>
