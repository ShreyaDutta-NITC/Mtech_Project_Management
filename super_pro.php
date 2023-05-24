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
<html>
<head>
<link rel = "icon" href = "images/download.png" type = "image/x-icon">
<title>NIT-Calicut</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</html>

<?php
                  include_once "navbar1.php";
                  include_once "includes/connect.inc.php";
                  error_reporting(0);
                  ?>

             




<!-- ___________________________________________________________________________________________________________________________________ -->
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="super_profile.php">Ongoing Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Project Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="superprof.php">Completed Projects</a>
      </li>
    </ul>
  </div>
  <div class="card-body" >
  <?php
                  // include_once "navbar.php";
                  // include_once "includes/connect.inc.php";
                  // session_start();
                  
                  $name=$_SESSION['name'];
                  $sql1="SELECT * from thesis WHERE supervisor_name='$name' AND status = 0 ORDER BY id DESC ";
                  $result1= mysqli_query($conn,$sql1);
                  // $num=mysqli_num_rows($result1);

                  $sql2="SELECT * from thesis WHERE supervisor_name='$name' AND status = 1 ";
                  $res2= mysqli_query($conn,$sql2);
                  $num=mysqli_num_rows($res2);
                  
                  
                  if($num!=2)
                  {
                    echo'<center><h2><strong>Project Requests</strong></h2>
                    <table id="example" class="table table-stri ped table-bordered" style="width:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <tbody>
                                      <tr>
                                        <th><h3><strong><center>Project Title</center></strong></h3></th>
                                        <th><h3><strong><center>Student Name</center></strong></h3></th>
                                        <th><h3><strong><center>Topic Area(s)</center></strong></h3></th>
                                        <th><h3><strong><center>Description</center></strong></h3></th>
                                        <th><h3><strong><center>Action</center></strong></h3></th>
                                      </tr>';

                  
                  while ($row = mysqli_fetch_array($result1))
                  {
                    $sql2="SELECT * from student WHERE id=".$row['student_id'];
                    $result2= mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_array($result2);
                              echo '<tr>
                              <td>'.$row["name"].'</td>
                              <td>'.$row2["name"].'</td>
                              <td>'.$row["keyword"].'</td>
                              <td>'.$row["abstract"].'</td>
                              ';
                              
                              echo'<td><a href="panel.php?id='.$row['id'].'">Approve </a>/<a href="includes/deleterequest.inc.php?id='.$row['id'].'">Reject </a></td>
                              ';
                                
                                
                                
                              echo '</tr>';
                }
                
                } 
                else
                { 
                    echo '<h3><strong>No Pending Project Requests</strong></h3>';
                } ?>
                </tbody>
              </table>


    <!-- <center><h2><strong>Completed projects</strong></h2> -->
<!-- <table  class="table" border ="2" align = "center" style="width:90%;" > -->
<!-- <table id="example" class="table table-stri ped table-bordered" style="width:100%">

                <tbody>
                  <tr>
                    <th><h3><strong><center>Project Title</center></strong></h3></th>
                    <th><h3><strong><center>Student Name</center></strong></h3></th>
                    <th><h3><strong><center>Topic Area(s)</center></strong></h3></th>
                    <th><h3><strong><center>Panel Members</center></strong></h3></th>
                    <th><h3><strong><center>Final Grade</center></strong></h3></th>
                    <th><h3><strong><center>Remarks</center></strong></h3></th>
                  </tr>
                  <?php
                  // include_once "navbar.php";
                  // include_once "includes/connect.inc.php";
                  // session_start();
                  $name=$_SESSION['name'];
                  $sql1="SELECT * from thesis WHERE supervisor_name='$name' AND status = 2";
                  $result1= mysqli_query($conn,$sql1);
                  
                  
                  while ($row = mysqli_fetch_array($result1))
                  {
                    $sql2="SELECT * from student WHERE id=".$row['student_id'];
                    $result2= mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_array($result2);
                              echo '<tr>
                              <td>'.$row["name"].'</td>
                              <td>'.$row2["name"].'</td>
                              <td>'.$row["keyword"].'</td>
                              <td>'.$row["panel"].'</td>
                              <td>'.$row["final_grade"].'</td>
                              <td><a href="remark.php?id='.$row['id'].'">Check remarks </a></td>';

                              
                              }
                                
                
                                
                              echo '</tr>';
                
                
                  ?>
                </tbody>
              </table> -->
              </div>
</div>