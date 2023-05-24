<style>
/* body{
    display: inline;
    justify-content: center;  
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(120deg,white, #EBE2FD);
} */
.column{
  max-width: 700px;
  width: 80%;
  background: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.4);

  position: absolute;
    top:130;
    bottom: 220;
    left: 140;
    right: 140;
    
    margin: auto;
}
select {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:0!important;
   background: transparent;
   background-image: none;
   flex: 1;
   padding: 0 .5em;
   color:black;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
   
}
select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 25em;
   height: 3em;
   line-height: 3;
   background: transparent;
   overflow: hidden;
   border-radius: .25em;
   box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.25);

}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: transparent;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #23b499;
}



</style>
<?php
include_once "navbar1.php";
include_once "includes/connect.inc.php";
// session_start();
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, "error") !== false) {
echo '<div style="color:red;"  role="alert"style="margin-left: .333333%;">
        Donot select same faculty/ Donot select self 
      </div>';
}
$id = $_GET['id'];

// $name=$_SESSION['name'];
$sql1="SELECT * from thesis WHERE id=".$id;
$result1= mysqli_query($conn,$sql1);

$sql="SELECT * FROM supervisor WHERE flag=1";
  $res=mysqli_query($conn,$sql);

while ($row1 = mysqli_fetch_array($result1))
{
  echo '<br><br><div class="column" align="center"><h2>Project Name: '.$row1['name'].'</h2>';

}
?>
<br>
<h3>Select Panel Members</h3>
<form class="form-horizontal " action="includes/panel.inc.php?id=<?php echo $id?> "method="post">
<!-- <div style="display: flex; flex-wrap: wrap;justify-content: space-between;">   -->
<div class="select">
<label for="supervisor"> Select Panel Member 1:</label>
  <select name="supervisor1" id="supervisor">
    
    <?php
    while($row=mysqli_fetch_array($res)){
      echo' <option value="'.$row['name'].'">'.$row['name'].'</option>';
    }?>
    
  </select>
  </div>
  <br>
  <div class="select">
  <label for="supervisor">Select Panel Member 2:</label>
  <select name="supervisor2" id="supervisor">
    <?php
    $res=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($res)){
      echo' <option value="'.$row['name'].'">'.$row['name'].'</option>';
    }?>
    
  </select>
  </div>
<br>
  <div class="select">
  <label for="supervisor">Select Panel Member 3:</label>
  <select name="supervisor3" id="supervisor">
    <?php
    $res=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($res)){
      echo'<option value="'.$row['name'].'">'.$row['name'].'</option>';
    }?>
    
  </select>
  </div>
  <div>
  <button class="btn"  name="submit" type="submit" style="height: 100%;
    width: 100%;
    color: #fff;
    outline: none;
    border: none;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
    height: 45px;
    margin: 20px 0;" >Save</button>
  </div>
  <center><a style="color:grey;" href="index.php">Go Back</a>

  <!-- </div> -->
</form>
  </div>
