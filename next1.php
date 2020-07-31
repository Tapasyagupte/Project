 <?php
    // session_start();
     $host=mysqli_connect("localhost", "root", "","student");          

      
 ?>
 
 <html >
     <body>
         <div>
             <table border cellpadding="3">
                 <?php
                 $data = mysqli_query($host,"SELECT * FROM studinfo");
                 while($info = mysqli_fetch_assoc($data)){ ?>
                     <tr>
                         <th>
                             <form method="post" action="next2.php">
                                 <input type="hidden" name="post_id" value="<?php echo $info['rollno']; ?>" />
                                 <input type="submit" name="delete_id" value="Delete" />
                             </form>
                         </th>
                         
                         <td>
                             <?php echo $info['rollno']; ?>
                         </td>
                         <td>
                             <?php echo $info['name']; ?>
                         </td>
                    </tr>
                 <?php }    ?>
             </table>
         </div>
     </body>
 </html>
