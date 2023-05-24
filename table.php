<?php
include_once "navbar1.php";
include_once "includes/connect.inc.php";
?>
<link rel="stylesheet" 
href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />     
<link rel="stylesheet" 
href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" />     
<Script src="https://code.jquery.com/jquery-1.12.3.js" 
type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js" 
type="text/javascript"></Script>


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
.container {
  width: 50%;
  margin: auto;
  box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.3);
  border-radius: 15px;
}
h2{
  text-align: center;
}
</style>

<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
  </head>
</html>
<br>
<br>
<main class="container">
  <h2>Evaluations - Bar Chart</h2>
  <div>
    <canvas id="barChart"></canvas>
  </div>
</main>

<?php

$id = $_GET['id'];
$sql="SELECT * FROM evaluations WHERE thesis_id=$id AND status=2";
$res= mysqli_query($conn,$sql);
$data1=array();
$data2=array();
$data3=array();

while($row= mysqli_fetch_array($res)){
    array_push($data1,(int)$row['marks']);
    array_push($data2,(int)$row['outofmarks']);
    array_push($data3,$row['name']);

}
$maxim=max($data2)+10;

?>

<script>
var d1=<?php echo json_encode($data1); ?>;
var d2=<?php echo json_encode($data2); ?>;

var l=<?php echo json_encode($data3); ?>;
var m=<?php echo json_encode($maxim); ?>;

var ctx = document.getElementById("barChart").getContext('2d');
var barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: l,
    datasets: [{
      label: 'Total Marks',
      data: d2,
      backgroundColor: "rgba(0,0,255,0.7)"
    }, {
      label: 'Marks Given',
      data: d1,
      backgroundColor: "rgba(255,0,0,0.7)"
    }]
  },
  options: {
    scales: {
        xAxes: [{
            scaleLabel: {
                display: true,
                labelString: 'Name'
            }

        }],
        yAxes: [{
            ticks: {
                beginAtZero: true,
                max: m
            },
            scaleLabel: {
                display: true,
                labelString: 'Marking'
            }

        }]
    }
  }
});
</script><br>
<br>
<table id="example" class="table" style="width:90%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

    <thead>
        <tr>
            <!-- <th>Project Title</th> -->
            <th>Evaluation Name</th>
            <th>Total Marks</th>
            <th>Marks given</th>
            <th>Date</th>
            <th>Remarks</th>
        </tr>
    </thead>
    <tbody>
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
    <td>'.$row['name'].'</td>
    <td>'.$row['outofmarks'].'</td>
    <td>'.$row['marks'].'</td>
    <td>'.$row['date'].'</td>
    <td>'.$row['remarks'].'</td>
    </tr>';

}
?>
    </tbody>
</table><br>
<center><button style="background-color: #008CBA;text-align: center;padding: 10px 24px; border-radius: 10px;">
<a style="color:white;"href="super_profile.php" class="btn btn-primary">Go Back</a><button>

<script>
        $(document).ready(function () {
            $(document).ready(function () {
                $('table').DataTable({                    
                    dom: 'Blfrtip',
                    buttons: [{
                        text: 'Export To Excel',                       
                        extend: 'excelHtml5',
                        exportOptions: {
                            modifier: {
                                selected: true
                            },
                            columns: [0, 1, 2, 3, 4],
                            format: {
                                header: function (data, columnIdx) {
                                    return data;
                                },
                                body: function (data, column, row) {
                                    // Strip $ from salary column to make it numeric
                                    debugger;
                                    return column === 5 ? "" : data;
                                }
                            }
                        },
                        footer: false,
                        customize: function (xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //$('c[r=A1] t', sheet).text( 'Custom text' );
                            //$('row c[r^="C"]', sheet).attr('s', '2');
                        }
                    }]
                });
            });
        });
    </script>
