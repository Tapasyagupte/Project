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
  color: 'Black';
}

</style>
<body>
<h1>WIKI AND BIO</h1>
<form method="post" action="formdataentry.php">
<fieldset>
<legend><h3>Actor Information</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Tittle name</TD>
    <TD>
      <INPUT TYPE="" NAME="tittlename" SIZE="150" placeholder="Enter Title" maxlength="50" pattern="[a-zA-Z]{1,20}" required>
      
    </TD>
  </TR>
  <TR>
    <TD>Real Name</TD>
    <TD><INPUT TYPE="" NAME="realname" SIZE="150" placeholder="Enter realname" maxlength="30" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
  <TR>
    <TD>Nick name</TD>
    <TD><INPUT TYPE="" NAME="nickname" SIZE="150" placeholder="Enter nickname ( name1,name2...)" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
   <TR>
    <TD>Country</TD>
    <TD><INPUT TYPE="" NAME="country" SIZE="150" placeholder="country" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
   <TR>
    <TD>Zodia Sign</TD>
    <TD><INPUT TYPE="" NAME="zodiac" SIZE="150" placeholder="Zodia sign" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
<TR>
    <TD>Current place</TD>
    <TD><INPUT TYPE="" NAME="currentplace" SIZE="150" placeholder="current place" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Birthdate</TD>
    <TD><INPUT TYPE="" NAME="birthdate" SIZE="150" placeholder="birthdate" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
<TR>
    <TD>Description</TD>
    <TD><INPUT TYPE="" NAME="description" SIZE="150" placeholder="description" maxlength="80" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
<TR>
    <TD>phoneno</TD>
    <TD><INPUT TYPE="" NAME="phoneno" SIZE="150" placeholder="phoneno" maxlength="10"  ></TD>
  </TR>
<TR>
    <TD>Profession</TD>
    <TD><INPUT TYPE="" NAME="profession" SIZE="150" placeholder="profession" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
   <TR>
    <TD>Photo</TD>
    <TD><INPUT TYPE="" id="image" ></TD>
  </TR>
</TABLE>
</fieldset>
<fieldset>
<legend><h3>Physical Statistics</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD> Height</TD>
    <TD>
      <INPUT TYPE="" NAME="height" SIZE="150" placeholder="Height">
      
    </TD>
  </TR>
  <TR>
    <TD>Weight</TD>
    <TD><INPUT TYPE="" NAME="weight" SIZE="150" placeholder="weight"></TD>
  </TR>
  <TR>
    <TD>Figure Measurements</TD>
    <TD><INPUT TYPE="" NAME="bicepts" SIZE="150" placeholder="figure measurements"></TD>
  </TR>
<TR>
    <TD>Waist</TD>
    <TD><INPUT TYPE="" NAME="waist" SIZE="150" placeholder="waist"></TD>
  </TR>
   <TR>
    <TD>Eye Color</TD>
    <TD><INPUT TYPE="" NAME="eyecolor" SIZE="150" placeholder="Eye Color" maxlength="5" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
   <TR>
    <TD>Hair Color</TD>
    <TD><INPUT TYPE="" NAME="haircolor" SIZE="150" placeholder="Hair Color" maxlength="5" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
<TR>
    <TD>Skin color</TD>
    <TD><INPUT TYPE="" NAME="skincolor" SIZE="150" placeholder="skincolor" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
</TABLE>
</fieldset>
<fieldset>
<legend><h3>Personal Life</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Birth Date</TD>
    <TD>
      <INPUT TYPE="" NAME="birthdate" SIZE="150" placeholder="Birth Date">
      
    </TD>
  </TR>
  <TR>
    <TD>Age</TD>
    <TD><INPUT TYPE="" NAME="Age" SIZE="150" placeholder="Age"></TD>
  </TR>
  <TR>
    <TD>Birth Place</TD>
    <TD><INPUT TYPE="" NAME="birthplace" SIZE="150" placeholder="Birth Place" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
   <TR>
    <TD>Sun Sign</TD>
    <TD><INPUT TYPE="" NAME="sunsign" SIZE="150" placeholder="Zodiac Sign/Sun Sign" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
   <TR>
    <TD>Country</TD>
    <TD><INPUT TYPE="" NAME="countryy" SIZE="150" placeholder="Country" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
   <TR>
    <TD>Email</TD>
    <TD><INPUT TYPE="" NAME="Email" SIZE="150" placeholder="Email" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
 <Tr>
 <TD>Father:</TD>
<TD><INPUT TYPE="" Name="father" size="150" placeholder="Enter Father's name" maxlength="20" pattern="[a-zA-Z]{1,20}" required</Td>
</tr>
<TR>
    <TD>Mother:</TD>
    <TD><INPUT TYPE="" NAME="mother" SIZE="150" placeholder="Enter Mother's name" maxlength="20" pattern="[a-zA-Z]{1,20}" required> </TD>
  </TR>
<TR>
    <TD>Brother</TD>
    <TD><INPUT TYPE="" NAME="brother" SIZE="150" placeholder="Enter Brother name" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
<TR>
    <TD>Sister</TD>
    <TD><INPUT TYPE="" NAME="sister" SIZE="150" placeholder="Enter Sister's name" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Son</TD>
    <TD><INPUT TYPE="" NAME="son" SIZE="150" placeholder="Enter Son's name" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Daughter</TD>
    <TD><INPUT TYPE="" NAME="sister" SIZE="150" placeholder="Enter Daughter's name" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Religion</TD>
    <TD><INPUT TYPE="" NAME="religion" SIZE="150" placeholder="Enter religion name" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Caste</TD>
    <TD><INPUT TYPE="" NAME="caste" SIZE="150" placeholder="Enter caste name" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Address</TD>
    <TD><INPUT TYPE="" NAME="homeaddress" SIZE="150" placeholder="Enter address" maxlength="50" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Hobbies</TD>
    <TD><INPUT TYPE="" NAME="hobbies" SIZE="150" placeholder="Enter hobbies" maxlength="30" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
</TABLE>
</fieldset>
<fieldset>
<legend><h3>Education</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD> School</TD>
    <TD>
      <INPUT TYPE="" NAME="school" SIZE="150" placeholder="Enter school name" maxlength="20" pattern="[a-zA-Z]{1,20}" >
      
    </TD>
  </TR>
  <TR>
    <TD>College</TD>
    <TD><INPUT TYPE="" NAME="college" SIZE="150" placeholder="Enter College name" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
  <TR>
    <TD>Educational Qualification</TD>
    <TD><INPUT TYPE="" NAME="qaulification" SIZE="150" placeholder="Enter educational qualification" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
  </TABLE>
</fieldset>
<fieldset>
<legend><h3>Show</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Film Debut</TD>
    <TD>
      <INPUT TYPE="" NAME="filmdebut" SIZE="150" placeholder="Enter Film Debut" maxlength="20" pattern="[a-zA-Z]{1,20}" >
      
    </TD>
  </TR>
<TR>
    <TD>Debut movie </TD>
    <TD>
      <INPUT TYPE="" NAME="debutmovie" SIZE="150" placeholder="Enter Debut movie" maxlength="20" pattern="[a-zA-Z]{1,20}" >
      
    </TD>
  </TR>

  <TR>
    <TD>Debut tvshow </TD>
    <TD><INPUT TYPE="" NAME="debuttvshow " SIZE="150" placeholder="Enter TV Debut" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
  <TR>
    <TD>Singing Debut</TD>
    <TD><INPUT TYPE="" NAME="debutsinging" SIZE="150" placeholder="Enter Singing Debut" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
  </TABLE>
</fieldset>
<fieldset>
<legend><h3>Favourite Things</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Favourite Food:</TD>
    <TD>
      <INPUT TYPE="" NAME="ffood" SIZE="150" placeholder="Enter favourite food" maxlength="20" pattern="[a-zA-Z]{1,20}" >
      
    </TD>
  </TR>
  <TR>
    <TD>Favourite Actor(s):</TD>
    <TD><INPUT TYPE="" NAME="factor" SIZE="150" placeholder="Enter favourite actor" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
  <TR>
    <TD>Favourite Actresses:</TD>
    <TD><INPUT TYPE="" NAME="factress" SIZE="150" placeholder="Enter favourite actresses" maxlength="20" pattern="[a-zA-Z]{1,20}" required></TD>
  </TR>
  <TR>
    <TD>Favourite Film(s):</TD>
    <TD><INPUT TYPE="" NAME="ffilm" SIZE="150" placeholder="Enter favourite films" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
 <TR>
    <TD>Favourite Song(s):</TD>
    <TD><INPUT TYPE="" NAME="fsong" SIZE="150" placeholder="Enter favourite songs" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
 <TR>
    <TD>Favourite Book(s):</TD>
    <TD><INPUT TYPE="" NAME="fbook" SIZE="150" placeholder="Enter favourite books" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
<TR>
    <TD>Favourite Fashion Designer:</TD>
    <TD><INPUT TYPE="" NAME="ffashiondesigner" SIZE="150" placeholder="Enter favourite fashion designer" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD>Favourite (other):</TD>
    <TD><INPUT TYPE="" NAME="favourite " SIZE="150" placeholder="Enter favourite"></TD>
  </TR> 
<TR>
    <TD>Favourite Restaurant:</TD>
    <TD><INPUT TYPE="" NAME="frestaurant" SIZE="150" placeholder="Enter favourite restaurant" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD>Favourite Destination:</TD>
    <TD><INPUT TYPE="" NAME="fdestination" SIZE="150" placeholder="Enter favourite destination" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD>Favourite beverages:</TD>
    <TD><INPUT TYPE="" NAME="fbeverages" SIZE="150" placeholder="Enter favourite beverages" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD>Favourite authors:</TD>
    <TD><INPUT TYPE="" NAME="fauthors" SIZE="150" placeholder="Enter favourite authors" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD>Favourite cuisines:</TD>
    <TD><INPUT TYPE="" NAME="fcuisines" SIZE="150" placeholder="Enter favourite cuisines" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD>Favourite tvshows:</TD>
    <TD><INPUT TYPE="" NAME="ftvshow" SIZE="150" placeholder="Enter favourite tvshow" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD>Favourite places:</TD>
    <TD><INPUT TYPE="" NAME="fplace" SIZE="150" placeholder="Enter favourite place" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>Favourite band</TD>
    <TD><INPUT TYPE="" NAME="fband" SIZE="150" placeholder="Enter  favourite band" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD> Movie</TD>
    <TD><INPUT TYPE="" NAME="fmovie" SIZE="150" placeholder="Enter favourite movie" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 
<TR>
    <TD> tvshows:</TD>
    <TD><INPUT TYPE="" NAME="tvshow" SIZE="150" placeholder="Enter  tvshow" maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR> 



  </TABLE>
</fieldset>
<fieldset>
<legend><h3>Boyfriends, Affairs and More</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Marital Status:</TD>
    <TD>
      <INPUT TYPE="" NAME="mstatus" SIZE="150" placeholder="Enter Marital Status" maxlength="20" pattern="[a-zA-Z]{1,20}" >
      
    </TD>
  </TR>
  <TR>
    <TD>Affairs/Boyfriends:</TD>
    <TD><INPUT TYPE="" NAME="affair" SIZE="150" placeholder="Enter Affairs/Boyfriends"maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>
  </TR>
 
<TR>
    <TD>Husband/Spouse:</TD>
    <TD><INPUT TYPE="" NAME="spouse" SIZE="150" placeholder="Enter Husband Spouse"maxlength="20" pattern="[a-zA-Z]{1,20}" ></TD>

 </TABLE>
</fieldset>
<fieldset>
<legend><h3>Money Factor</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Salary (approx.):</TD>
    <TD>
      <INPUT TYPE="" NAME="salary" SIZE="150" placeholder="Enter Salary">
      
    </TD>
  </TR>
  <TR>
    <TD>Income (as in 2018):</TD>
    <TD><INPUT TYPE="" NAME="annualincome" SIZE="150" placeholder="Enter Income"></TD>
  </TR>
  <TR>
    <TD>Net Worth (approx.):</TD>
    <TD><INPUT TYPE="" NAME="networth" SIZE="150" placeholder="Enter net worth"></TD>
  </TR>
  </TABLE>
</fieldset>
<fieldset>
<legend><h3>Social Media</h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Facebook:</TD>
    <TD>
      <INPUT TYPE="" NAME="facebook" SIZE="150" placeholder="Enter facebook">
      
    </TD>
  </TR>
  <TR>
    <TD>Twitter:</TD>
    <TD><INPUT TYPE="" NAME="twitter" SIZE="150" placeholder="Enter twitter"></TD>
  </TR>
  <TR>
    <TD>Instagram:</TD>
    <TD><INPUT TYPE="" NAME="instagram" SIZE="150" placeholder="Enter instagram"></TD>
  </TR>
 <TR>
    <TD>YouTube:</TD>
    <TD><INPUT TYPE="" NAME="youtube" SIZE="150" placeholder="Enter youtube"></TD>
  </TR>
 <TR>
    <TD>Myspace:</TD>
    <TD><INPUT TYPE="" NAME="myspace" SIZE="150" placeholder="Enter myspace"></TD>
  </TR>
 <TR>
    <TD>Wikipedia:</TD>
    <TD><INPUT TYPE="" NAME="wikipedia" SIZE="150" placeholder="Enter wikipedia"></TD>
  </TR>
  </TABLE>
</fieldset>
</form>
</body>
</html>
