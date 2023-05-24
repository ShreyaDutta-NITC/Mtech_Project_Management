<style>
table, th, td {
border: 1px solid;
border-collapse: collapse;
border-color: #c6c6c6;
}
th{
  height:50px;
}
td{
  height:30px;
  text-align: center
}
</style>
<?php
include_once "navbar1.php";
include_once "includes/connect.inc.php";
?>
<!-- <div align="right"><a href="super_profile.php">Back</a></div> -->
<body>
  <br><br>
<center><h2>Previous Evaluation Remarks</h2><br>
<!-- <table  class="table" border ="2" align = "center" style="width:70%;" > -->
<table id="example" class="table" style="width:90%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <tbody>
                  <tr>
                    <th><h3><strong><center>Project Title</center></strong></h3></th>
                    <th><h3><strong><center>Evaluation Name</center></strong></h3></th>
                    <th><h3><strong><center>Total Marks</center></strong></h3></th>
                    <th><h3><strong><center>Marks given</center></strong></h3></th>
                    <th><h3><strong><center>Remarks</center></strong></h3></th>
                  </tr>


<?php
$id = $_GET['id'];
$sql = "SELECT * FROM evaluations WHERE status = 2 AND thesis_id=".$id;
$result= mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result))
{
    $sql1= "SELECT * FROM thesis WHERE id=".$row['thesis_id'];
    $result1= mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_array($result1);
    echo '<tr>
    <td>'.$row1['name'].'</td>
    <td>'.$row['name'].'</td>
    <td>'.$row['outofmarks'].'</td>
    <td>'.$row['marks'].'</td>
    <td>'.$row['remarks'].'</td>
    </tr>';

}
?>
</tbody>
</table><br>
<button style="background-color: #008CBA;text-align: center;padding: 10px 24px; border-radius: 10px;">
<a style="color:white;"href="super_profile.php" class="btn btn-primary">Go Back</a><button>
</body>

