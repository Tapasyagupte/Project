<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <titlel></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <style >
   img {
  image-rendering: auto;
  image-rendering: crisp-edges;
  image-rendering: pixelated;
}
 </style>
 <body style='font-size:28;text-align:left; color: white; background-image:url("finalpageimage.jpg");background-repeat:repeat-y;'>
  <?php include_once'header.php';?>
  <div class="container">
   <br />
   
   <h2 align="center"></h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by NAME" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>

 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>