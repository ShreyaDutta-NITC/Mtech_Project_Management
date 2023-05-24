<!-- <style>
  * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    color:white;
    text-shadow: 2px 2px 4px #000000;

  float: left;
  width: 50%;
  padding: 30px;
  height: 300px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a{
  color: white;
}
a:link {
  border-radius: 15px;
  background-color: #00023D;
  
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover {
    color: #75FF90;
}
</style> -->
<?php
include_once "navbar1.php";
?>
<style>
/* Create two equal columns that floats next to each other */
.column {
  color:black;
  float: left;
  width: 50%;
  padding: 10px 50px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<!-- <div align="right"><a href="includes/logout.inc.php" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Logout</a></div> -->
<br><br><br><br><br><br><br>


<!DOCTYPE html>
<html>  
  <link rel="stylesheet" href="style.css"></link> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="row"><center>
  <div class="column" style="border-radius: 30px;">
    <br><h2>To approve students click below</h2>
    <br>
    <a href="approvestudent.php" style="color:white;background-color: #00023D;padding: 14px 25px; text-align: center;border-radius: 15px;">
    Approve Student</a>
    <br><br><br>
    <!-- <h3>you will be redirected to student page</h3> -->
  </div>
  <div class="column" style="border-radius: 30px;;">
    <br><h2>To approve supervisors click below</h2>
    <br>
    <a href="approvesupervisor.php" style="color:white;background-color: #00023D;padding: 14px 25px; text-align: center;border-radius: 15px;">
    Approve supervisor</a>
    <br><br><br>
    <!-- <h3>you will be redirected to advisor page</h3> -->
  </div>
</div></center>

</body>
</html>

