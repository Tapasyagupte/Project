<html>

<style>

td{font-size:25px;}
input[type]{border:2px solid black;}
input[type=text]{
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: "white";
  color: black;
}
input[type=password]{
width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: "white";
  color: black;
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
  margin-left: 400px;
}
.bg {
  /* The image used */
  background-image: url("userimage1.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<body style='color:black;'class='bg'>
  <?php include_once'header.php';?>
  <h1 align="center"><u>ADMIN INTERFACE</u></h1>
<form action="admin.php">
<fieldset>
<legend><h3 ><u>Admin Information</u></h3></legend>
<br>
<TABLE cellspacing="20">
  <TR>
    <TD>Username</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="150" placeholder="Enter username"  maxlength="20" pattern="[a-zA-Z]{1,20}"required>
      
    </TD>
  </TR>
  <TR>
    <TD>Password</TD>
    <TD><INPUT TYPE="PASSWORD" NAME="password" SIZE="150" placeholder="Enter password" maxlength="20" required></TD>
  </TR>
 </TABLE>
</fieldset>
<br>
<input type="button" align="center" class='button' onclick="check(this.form)" value="Login"/>
<input type="reset" align="center" class='button' value="Cancel"/>
</form>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.name.value == "admin" && form.password.value == "admin123")
  {
    window.open('admin.php')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
<?php
?>

</body>
</html>