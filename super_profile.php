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
</style><html>
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

                  <!-- <?php
                  // include_once "navbar.php";
                  // include_once "includes/connect.inc.php";
                  // session_start();
                  
                  $name=$_SESSION['name'];
                  $sql1="SELECT * from thesis WHERE supervisor_name='$name' AND status = 0 ORDER BY id DESC ";
                  $result1= mysqli_query($conn,$sql1);
                  // $num=mysqli_num_rows($result1);

                  $sql2="SELECT * from thesis WHERE supervisor_name='$name' AND status != 0 ";
                  $res2= mysqli_query($conn,$sql2);
                  $num=mysqli_num_rows($res2);
                  if($num<2)
                  {
                    echo'<center><h3><strong>Project Requests</strong></h3>
                    <table  class="thead-dark" border ="2" align = "center" style="width:90%;" >
                                    <tbody>
                                      <tr>
                                        <th><h3><strong><center>Project Title</center></strong></h3></th>
                                        <th><h3><strong><center>Student Name</center></strong></h3></th>
                                        <th><h3><strong><center>Topic Area(s)</center></strong></h3></th>
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
                              <td>'.$row["keyword"].'</td>';
                              
                              echo'<td><a href="approverequest.php?id='.$row['id'].'">Approve </a>/<a href="includes/deleterequest.inc.php?id='.$row['id'].'">Reject </a></td>
                              ';
                                
                                
                                
                              echo '</tr>';
                }
                
                }  ?>
                </tbody>
              </table> -->
             





<!-- ___________________________________________________________________________________________________________________________________ -->
<div class="card text-center">
  <div class="card-header" style="background: linear-gradient(120deg,white, #EBE2FD);">
    <ul class="nav nav-tabs card-header-tabs">
      
      <li class="nav-item">
        <a class="nav-link active" href="#">Ongoing Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="super_pro.php">Project Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="superprof.php">Completed Projects</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    <center>      <h2 class="card-title"><strong>Ongoing projects</strong></h2> </center>
    <p class="card-text"><table class="table" style="width:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <tbody>
                  <tr>
                    <th><h3><strong><center>Project Title</center></strong></h3></th>
                    <th><h3><strong><center>Student Name</center></strong></h3></th>
                    <th><h3><strong><center>Topic Area(s)</center></strong></h3></th>
                    <th><h3><strong><center>Panel Members</center></strong></h3></th>
                    <th><h3><strong><center>Remarks</center></strong></h3></th>
                    <th><h3><strong><center>Evaluations</center></strong></h3></th>
                  </tr>
                  <?php
                  // include_once "navbar.php";
                  // include_once "includes/connect.inc.php";
                  // session_start();
                  $name=$_SESSION['name'];
                  $sql1="SELECT * from thesis WHERE supervisor_name='$name' AND status = 1 ORDER BY id DESC ";
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
                              <td>'.$row["panel"].'</td>';
                              echo '<td><a href="table.php?id='.$row['id'].'">Check remarks </a></td>';

                              $query="SELECT COUNT(*) FROM evaluations WHERE status=2 AND thesis_id=".$row['id'];
                              $result5= mysqli_query($conn,$query);
                              $row6 = mysqli_fetch_array($result5);
                              if($row6[0]=="6"){
                                var_dump($row['id']);
                                echo '<td> 
                                <form action="includes/finalmarking.inc.php"  method="post">
                                <div class="form-group">
                                  <label>Final Grading</label>
                                  <input style="width:100%;" name="marks" type="text" class="form-control">
                                </div>
                                <input type="hidden" name="id" value="'.$row['id'].'" class="form-control" required>    
                                <button type="submit" name="submit" class="btn btn-primary" style="width:100%;padding: 5px 13px">Save</button>
                                </form></td>';
                                }
                                else{
                              $sql="SELECT * FROM `evaluations` WHERE thesis_id=".$row['id']." ORDER BY id DESC";
                              // var_dump($sql);
                              $res=mysqli_query($conn,$sql);
                              $row5=mysqli_fetch_array($res);
                              if($row5['status']==2 || $row5==NULL){
                              echo'<td><a href="eval1.php?id='.$row['id'].'">Set Evaluation Date </a></td>';
                              }
                              elseif($row5['status']==0)             
                                {
                                  echo '<td>Waiting for submission!</td>';
                                }
                                else{
                                  
                                  echo '<td><a href="marking1.php?id='.$row5['id'].'"> Evaluate </a></td>';
                                  
                                }
                              }
                            }
                                
                
                                
                              echo '</tr>';
                
                
                  ?>
                </tbody>
              </table></p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>

<!-- <center><h3><strong>Ongoing projects</strong></h3> -->
<!-- <table  class="thead-dark" border ="2" align = "center" style="width:90%;" >
                <tbody>
                  <tr>
                    <th><h3><strong><center>Project Title</center></strong></h3></th>
                    <th><h3><strong><center>Student Name</center></strong></h3></th>
                    <th><h3><strong><center>Topic Area(s)</center></strong></h3></th>
                    <th><h3><strong><center>Panel Members</center></strong></h3></th>
                    <th><h3><strong><center>Remarks</center></strong></h3></th>
                    <th><h3><strong><center>Evaluations</center></strong></h3></th>
                  </tr>
                  <?php
                  // include_once "navbar.php";
                  // include_once "includes/connect.inc.php";
                  // session_start(); -->
                  $name=$_SESSION['name'];
                  $sql1="SELECT * from thesis WHERE supervisor_name='$name' AND status = 1 ORDER BY id DESC ";
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
                              <td>'.$row["panel"].'</td>';
                              echo '<td><a href="remark.php?id='.$row['id'].'">Check remarks </a></td>';

                              $query="SELECT COUNT(*) FROM evaluations WHERE status=2 AND thesis_id=".$row['id'];
                              $result5= mysqli_query($conn,$query);
                              $row6 = mysqli_fetch_array($result5);
                    
                              $sql="SELECT * FROM `evaluations` WHERE thesis_id=".$row['id']." ORDER BY id DESC";
                              // var_dump($sql);
                              $res=mysqli_query($conn,$sql);
                              $row5=mysqli_fetch_array($res);
                              if($row5['status']==2 || $row5==NULL){
                              echo'<td><a href="eval.php?id='.$row['id'].'">Set Evaluation Date </a></td>';
                              }
                              elseif($row5['status']==0)             
                                {
                                  echo '<td>Waiting for submission!</td>';
                                }
                                else{
                                  if($row6[0]=="5"){
                                  echo '<td><a href="finalmarking.php?id='.$row5['id'].'"> Final Grading </a></td>';
                                  }
                                  else{
                                  echo '<td><a href="marking.php?id='.$row5['id'].'"> Evaluate </a></td>';
                                  }
                                }
                              }
                                
                
                                
                              echo '</tr>';
                
                
                  ?>
                </tbody>
              </table> -->
    
              
<!-- ___________________________________________________________________________________________________________________________________ -->
<!-- <center><h3><strong>Completed projects</strong></h3>
<table  class="table" border ="2" align = "center" style="width:90%;" >
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
              </table>
              -->