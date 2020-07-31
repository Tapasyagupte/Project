<html>
<heah></head>
<style>

td{font-size:25px;}
input[type]{border:2px solid black;}
input[type=text]{
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #FFB6C1;
  color: white;
}

input[type=number]{
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #FFB6C1;
  color: white;
}
input[type=email]{
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #FFB6C1;
  color: white;
}
.button {
  background-color:black; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 10px;
  margin-left: 650px;
}
  

</style>
<body style='font-size:28; background-image:url("userimage1.jpg");background-repeat:repeat-y;' >
  <?php include_once'header.php';?>
<h1 style="text-align:center;">INSERT</h1>
<form method="post" action="i.php"  enctype="multipart/form-data" >
<fieldset class="bg">
<legend><h3>Actor Information</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Categories </TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="categories" SIZE="150"  value="" placeholder="Enter categories :hollywood,bollywood,TV,Bigboss etc" maxlength="50" pattern="[a-zA-Z]{1,20}" required>
       </TD>
  </TR>
  <TR>
    <TD>Real Name</TD>
    <TD><INPUT TYPE="TEXT" NAME="realname" SIZE="150"  value="" placeholder="Enter realname" maxlength="50" pattern="[a-zA-Z]{1,20}" required ></TD>
  </TR>
  <TR>
    <TD>Nick name</TD>
    <TD><INPUT TYPE="TEXT" NAME="nickname" SIZE="150"  value="" placeholder="Enter nickname" >
</TD>
  </TR>
   <TR>
    <TD>tittlename</TD>
    <TD><INPUT TYPE="TEXT" NAME="tittlename" SIZE="150"  value="" placeholder="Enter tittlename" >
</TD>
  </TR>
   <TR>
    <TD>Description</TD>
    <TD><INPUT TYPE="TEXT" NAME="description" SIZE="150"  value="" placeholder="Enter description"  >
</TD>
  </TR>
   <TR>
    <TD>Birthdate</TD>
    <TD><INPUT TYPE="date" NAME="birthdate" SIZE="150"  value="" placeholder="Enter birthdate"></TD>
  </TR>
</TABLE>
</fieldset>
<br>
<fieldset class='bg'>
<legend><h3>Personal Information</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Country</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="country" SIZE="150"  value="" placeholder="Enter country" >

    </TD>
  </TR>
  <TR>
    <TD>Zodiacsign</TD>
    <TD><INPUT TYPE="TEXT" NAME="zodiacsign" SIZE="150"  value="" placeholder="Enter zodiacsign"></TD>
  </TR>
  <TR>
    <TD> Profession</TD>
    <TD><INPUT TYPE="TEXT" NAME="profession" SIZE="150"  value="" placeholder="Enter profession"></TD>
  </TR>
   <TR>
    <TD>birthplace</TD>
    <TD><INPUT TYPE="TEXT" NAME="birthplace" SIZE="150"  value="" placeholder="Enter birthplace">
</TD>
  </TR>
   <TR>
    <TD>nationality</TD>
    <TD><INPUT TYPE="TEXT" NAME="nationality" SIZE="150"  value="" placeholder="Enter nationality"></TD>
  </TR>
  <TR>
    <TD>Sunsign</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="sunsign" SIZE="150"  value="" placeholder="Enter sunsign">
      
    </TD>
  </TR>
  <TR>
    <TD>Religion</TD>
    <TD><INPUT TYPE="TEXT" NAME="religion" SIZE="150"  value="" placeholder="Enter religion"></TD>
  </TR>
  <TR>
    <TD>Caste</TD>
    <TD><INPUT TYPE="TEXT" NAME="caste" SIZE="150"  value="" placeholder="Enter caste"></TD>
  </TR>
  <TR>
    <TD>Father</TD>
    <TD><INPUT TYPE="TEXT" NAME="father" SIZE="150"  value="" placeholder="Enter father"></TD>
  </TR>
   <TR>
    <TD>Brother</TD>
    <TD><INPUT TYPE="TEXT" NAME="brother" SIZE="150"  value="" placeholder="Enter brother"></TD>
  </TR>
 <Tr>
 <TD>Mother:</TD>
<TD><INPUT TYPE="TEXT" NAME="mother" SIZE="150"  value="" placeholder="Enter mother"></Td>
</tr>
<TR>
    <TD>Sister:</TD>
    <TD><INPUT TYPE="TEXT" NAME="sister" SIZE="150"  value="" placeholder="Enter sister"> </TD>
  </TR>
<TR>
    <TD>Currentplace</TD>
    <TD><INPUT TYPE="TEXT" NAME="currentplace" SIZE="150"  value="" placeholder="Enter currentplace"></TD>
  </TR>
<TR>
    <TD>haircolor</TD>
    <TD><INPUT TYPE="TEXT" NAME="haircolor" SIZE="150"  value="" placeholder="Enter haircolor"></TD>
  </TR>
<TR>
    <TD>eyecolor</TD>
    <TD><INPUT TYPE="TEXT" NAME="eyecolor" SIZE="150"  value="" placeholder="Enter eyecolor"></TD>
  </TR>
<TR>
    <TD>skincolor</TD>
    <TD><INPUT TYPE="TEXT" NAME="skincolor" SIZE="150"  value="" placeholder="Enter skincolor"></TD>
  </TR>
<TR>
    <TD>Hobbies</TD>
    <TD><INPUT TYPE="TEXT" NAME="hobbies" SIZE="150"  value="" placeholder="Enter hobbies"></TD>
  </TR>
<TR>
	
    <TD>     Select image to upload</TD
><TD><input type="file" name="image"></TD></TD></TR>
</TABLE>
</fieldset>
<br>
<fieldset class="bg">
<legend><h3>Address</h3></legend>
<br>
<TABLE cellspacing="20">
  
   <TR>
    <TD>Hometown</TD>
    <TD><INPUT TYPE="TEXT" NAME="hometown" SIZE="150"  value="" placeholder="Enter hometown"></TD>
  </TR>
   <TR>
    <TD> homeaddress</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="homeaddress" SIZE="150"  value="" placeholder="Enter homeaddress">
      
    </TD>
  </TR>
  <TR>
    <TD>phoneno</TD>
    <TD><INPUT TYPE="number" NAME="phoneno" SIZE="150"  value="" placeholder="Enter phoneno"></TD>
  </TR>
  <TR>
    <TD>Email</TD>
    <TD><INPUT TYPE="email" NAME="email" SIZE="150"  value="" placeholder="Enter email"></TD>
  </TR>
  <TR>
    <TD>website</TD>
    <TD>
     <INPUT TYPE="TEXT" NAME="website" SIZE="150"  value="" placeholder="Enter website">
      
    </TD>
</TABLE>
</fieldset>
<fieldset class="bg">
<legend><h3>Education</h3></legend>
<br>
<TABLE cellspacing="20">

	<TR>
    <TD>school:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="school" SIZE="150"  value="" placeholder="Enter school">
    </TD>
  </TR>
 <TR>
    <TD>college</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="college" SIZE="150"  value="" placeholder="Enter college">
    </TD>
  </TR> 
 <TR>
    <TD>qaulification</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="qaulification" SIZE="150"  value="" placeholder="Enter qaulification">
    </TD>
  </TR>
  
  </TABLE>
</fieldset>
<fieldset class="bg">
<legend><h3>Body Measure</h3></legend>
<br>
<TABLE cellspacing="20">
  
  </TR>
  <TR>
    <TD>height</TD>
    <TD><INPUT TYPE="number" NAME="height" SIZE="150"  value="" placeholder="Enter height">
</TD>
  </TR>
  <TR>
    <TD>chest</TD>
<TD><INPUT TYPE="number" NAME="chest" SIZE="150"  value="" placeholder="Enter chest"></INPUT></TD>
  </TR>
  <TR>
    <TD>biceps</TD>
    <TD>
<INPUT TYPE="number" NAME="biceps" SIZE="150"  value="" placeholder="Enter biceps">
      
    </TD>
  </TR>
  <TR>
    <TD>waist</TD>
    <TD>
<INPUT TYPE="number" NAME="waist" SIZE="150"  value="" placeholder="Enter waist">
    </TD>
  </TR>
  <TR>
    <TD>Weight</TD>
    <TD>
<INPUT TYPE="number" NAME="weight" SIZE="150"  value="" placeholder="Enter weight">
    </TD>
  </TR>
  
  </TABLE>
</fieldset>
<fieldset class="bg">
<legend><h3>Boyfriends, Affairs and More</h3></legend>
<br>
<TABLE cellspacing="20">
<TR>
    <TD>Tv show:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="tvshow" SIZE="150"  value="" placeholder="Enter tvshow">
    </TD>
  </TR> 
<TR>
    <TD>Reality show:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="realityshow" SIZE="150"  value="" placeholder="Enter realityshow">
    </TD>
  </TR> 
  <TR>
    <TD>Movie:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="movies" SIZE="150"  value="" placeholder="Enter movies">
    </TD>
  </TR> 
<TR>
    <TD>Debut movie:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="debutmovie" SIZE="150"  value="" placeholder="Enter debutmovie">
    </TD>
  </TR> 
    <TR>
    <TD>Debut tv show:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="debuttvshow" SIZE="150"  value="" placeholder="Enter debuttvshow">
      
    </TD>
  </TR>
  <TR>
    <TD>Debut singing</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="debutsinging" SIZE="150"  value="" placeholder="Enter debutsinging">
    </TD>
  </TR>
  <TR>
    <TD>Bestmovie</TD>
<TD><INPUT TYPE="TEXT" NAME="bestmovie" SIZE="150"  value="" placeholder="Enter bestmovie"></TD>
  </TR>
    </TABLE>
</fieldset>
<fieldset class="bg">
<legend><h3>Favourite Things</h3></legend>
<br>
<TABLE cellspacing="20">
  
<TR>
    <TD>Favourite authors</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="fauthors" SIZE="150"  value="" placeholder="Enter fauthors">
    </TD>
  </TR> 
<TR>
    <TD>Favourite fbook:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="fbook" SIZE="150"  value="" placeholder="Enter fbook">
    </TD>
  </TR> 
<TR>
    <TD>Favourite actor :</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="factor" SIZE="150"  value="" placeholder="Enter factor">
    </TD>
  </TR> 
<TR>
    <TD>Favourite actress:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="factress" SIZE="150"  value="" placeholder="Enter factress">
    </TD>
  </TR> 
<TR>
    <TD>Favourite movie:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="fmovie" SIZE="150"  value="" placeholder="Enter fmovie">
      
    </TD>
  </TR>
  <TR>
    <TD>Favourite band:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="fband" SIZE="150"  value="" placeholder="Enter fband">
    </TD>
  </TR>
  <TR>
    <TD>Favourite tv show:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="ftvshow" SIZE="150"  value="" placeholder="Enter ftvshow">
    </TD>
  </TR>
  <TR>
    <TD>Favourite place:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="fplace" SIZE="150"  value="" placeholder="Enter fplace">
    </TD>
  </TR>
 <TR>
    <TD>Favourite beverages:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="fbeverages" SIZE="150"  value="" placeholder="Enter fbeverages">
    </TD>
  </TR> 
 <TR>
    <TD>Favourite cuisine: </TD>
    <TD>
<INPUT TYPE="TEXT" NAME="fcuisines" SIZE="150"  value="" placeholder="Enter fcuisines">
    </TD>
  </TR>
  </TABLE>
</fieldset>
<fieldset class="bg">
<legend><h3>Boyfriends, Affairs and More</h3></legend>
<br>
<TABLE cellspacing="20">
 <TR>


    <TD>Marital status:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="mstatus" SIZE="150"  value="" placeholder="Enter mstatus">    </TD>
  </TR>
  <TR>


    <TD>Affaire:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="affaire" SIZE="150"  value="" placeholder="Enter affaire">
    </TD>
  </TR>
  <TR>


    <TD>Spouse:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="spouse" SIZE="150"  value=""placeholder="Enter spouse" >
    </TD>
  </TR>
 
    <TD>Son:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="son" SIZE="150"  value="" placeholder="Enter son">
    </TD>
  </TR>

    <TD>Daughter:</TD>
    <TD>
<INPUT TYPE="TEXT" NAME="daughter" SIZE="150"  value="" placeholder="Enter daughter">
    </TD>
  </TR>

 </TABLE>
</fieldset>
<fieldset class="bg">
<legend><h3>Money Factor</h3></legend>
<br>
<TABLE cellspacing="20">
<TR>
    <TD>Salary:</TD>
    <TD>
<INPUT TYPE="number" NAME="salary" SIZE="150"  value="" placeholder="Enter salary">
      
    </TD>
  </TR>
  <TR>
    <TD>Annual income:</TD>
    <TD>
<INPUT TYPE="number" NAME="annualincome" SIZE="150"  value="" placeholder="Enter annualincome">
    </TD>
  </TR>
  </TABLE>
</fieldset>
<fieldset class="bg">
<legend><h3>Social Media</h3></legend>
<br>
<TABLE cellspacing="20">
  
  <TR>
    <TD>Facebook:</TD>
    <TD>
 <INPUT TYPE="TEXT" NAME="facebook" SIZE="150"  value="" placeholder="Enter facebook">
    </TD>
  </TR>
  <TR>
    <TD>Twitter:</TD>
    <TD><INPUT TYPE="TEXT" NAME="twitter" SIZE="150"  value="" placeholder="Enter twitter">
</TD>
    

  </TR>
  <TR>
    <TD>Instagram:</TD>
    <TD><INPUT TYPE="TEXT" NAME="instagram" SIZE="150"  value="" placeholder="Enter instagram"></TD>
    

  </TR>
 <TR>
    <TD>YouTube:</TD>
    <TD><INPUT TYPE="TEXT" NAME="youtube" SIZE="150" value="" placeholder="Enter youtube"></TD>
  </TR>
<TR>
    <TD>Wikipedia:</TD>
    <TD><INPUT TYPE="TEXT" NAME="wikipedia" SIZE="150" value="" placeholder="Enter wikipedia"></TD>
  </TR>

  <TR>


    <TD>Myspace:</TD>
    <TD><INPUT TYPE="TEXT" NAME="myspace" SIZE="150"  value="" placeholder="Enter myspace"></TD>
  </TR>
 
 
  </TABLE>
</fieldset>
<input  name="submit" align="center" type="submit" class="button" value="Insert">
<?php
?>

</form>
</body>
</html>
