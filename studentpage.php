<?php
include_once "includes/connect.inc.php";
include_once "navbar1.php";
?>

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

button{
  width:30%;
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  border-radius: 12px;
}
</style>

<?php
$id = $_SESSION['id'];
$sql="SELECT * from thesis WHERE student_id=".$id;
$result= mysqli_query($conn,$sql);



while($row = mysqli_fetch_array($result)){
    echo '<br><h2 style="float:left;display:inline;"><strong>Project Name: '.$row['name'].'</strong></h2><br>';
    if($row['status']==0){
        echo'<h3 align="center" style="color:#FFA500;">Project status: Pending </h3>';
    }
    else if($row['status']==1)
    {
        echo'<br><center>
        <table id="example" class="table" style="width:50%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <thead>
                <tr>
                    <th>Project status</th>
                    <th>Evaluations</th>
                </tr>
            </thead>
            <tbody>
            <tr>
        <td><h4 style="color:green">Accepted </h4></td>';
        
        $sql1="SELECT * from evaluations WHERE thesis_id=".$row['id'];
        $r1=mysqli_query($conn,$sql1);
        $row11=mysqli_fetch_array($r1);
        // var_dump($row11);
        if(!$row11){
            echo '<td><h4 style="color:#646565;">Not yet graded!</h4></td>';
        }
        else{
        echo '<td><h4><a href="evalhistory.php?id='.$row['id'].'">Check marks</a></h4></td>
        </tr>
        </tbody>
        </table></center><br>';}

        // var_dump($sql1);
        $result1= mysqli_query($conn,$sql1);
        while($row1=mysqli_fetch_array($result1))
        {
        if($row1['status']==0){
            $today=strtotime(date("Y-m-d"));
            $date=strtotime($row1['date']);
            
            
        echo '<center><div class="card" style="width:80%">
        <div class="card-body">
          <h2 class="card-title"><strong>Add Submission</strong></h2>
          <p class="card-text">
            <form class="form-horizontal" action="includes/addattachment.inc.php?id='.$row['id'].'" method="post" enctype="multipart/form-data">
            <table align="center" id="example" class="table" style="width:90%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <thead>
        <tr>
            <th>Name of Evaluation</th>
            <th>Date of Evaluation</th>
            <th>Total Evaluation Marks</th>
            <th>Add Attachments</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td><h4 >'.$row1['name'].'</h4></td>
            <td><h4 >'.$row1['date'].'</h4></td>
            <td><h4 >'.$row1['outofmarks'].'</h4></td>';

            if($today>$date){
                echo'You have missed the deadline';
            }
            else{
            echo'
            <td>
            <input name="profilepic[]" class="mx-3 mb-3" type="file" multiple="multiple" required>
            <div><br><button  name="submit" type="submit" >Save</button></div></td>
        </div><br><br>';
            }
            echo '
            </tr></tbody></table></form>
          </p>
        </div>
      </div></center>';
        }
        // echo'<div>
        // <form class="form-horizontal" action="includes/addattachment.inc.php?id='.$row['id'].'" method="post" enctype="multipart/form-data">
        // <h3><strong>Add Submission</strong></h3>
        // <h4 align="left">Evaluation Name: '.$row1['name'].'</h4>
        // <h4 align="left">Evaluation Date: '.$row1['date'].'</h4>
        // <h4 align="left">Total Evaluation Marks: '.$row1['outofmarks'].'</h4>';
        // if($today>$date){
        //     echo'You have missed the deadline';
        // }
        // else{
        //     echo'
        // <h4 align="left">Add Attachments<h4>
        // <input name="profilepic[]" class="mx-3 mb-3" type="file" multiple="multiple" style="font-size: 1.5rem;">
        // <div><button class="top col-md-12 offset-md-3 btn btn-primary" name="submit" type="submit" style="width:7%;padding: 5px 13px" >Save</button></div>
        // </div><br><br>
        // ';
        // }
        // }
        // elseif($row1['status']==2){
        //     echo '
        //         <table  class="table" border ="2" align = "center" style="width:70%;" >
        //         <tbody>
        //         <caption style="color:black"><strong><center><h3>Previous Evaluations</h3></caption>
        //           <tr>
        //             <th><h3><strong><center>Evaluation Date</center></strong></h3></th>
        //             <th><h3><strong><center>Name of Evaluation</center></strong></h3></th>
        //             <th><h3><strong><center>Total Marks</center></strong></h3></th>
        //             <th><h3><strong><center>Marks Given</center></strong></h3></th>
        //             <th><h3><strong><center>Remarks</center></strong></h3></th>
        //           </tr>';
        //           echo '
        //           <td >'.$row1["date"].'</td>
        //           <td>'.$row1["name"].'</td>
        //           <td>'.$row1["outofmarks"].'</td>
        //           <td>'.$row1["outofmarks"].'</td>
        //           <td>'.$row1["remarks"].'</td>';
           
        // }
        }
    }
else{
    echo'<br>
<center><table id="example" class="table" style="width:90%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <thead>
        <tr>
            <th>Project Status</th>
            <th>Final Grade</th>
            <th>Evaluations</th>
            <th>Report</th>
        </tr>
    </thead>
    <tbody>
    <tr>
    <td><h4 style="color:green">Completed</h4></td>
    <td><h4>'.$row['final_grade'].'</h4></td>
    <td><h4><a href="evalhistory.php?id='.$row['id'].'"> Check marks</a></h4></td>
    <td><h4><a href="pdfgenerator.php?id='.$row['id'].'"> Generate Report</a></h4></td>
    </tr>
    </tbody>
    </table></center><br>
    ';

}
}
    // for($i=1;$i<sizeof($arr);$i++){
    //     echo '<a href="download.php?path=Docs/'.$arr[$i].'">'.$arr[$i].'</a><br>';
    // }


?>