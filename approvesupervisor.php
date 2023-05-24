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
  
/* body {
  width: 99vw;
  height: 95vh;
 
  background:linear-gradient(to right, #000428, #004e92, #1ca7ec, #5e72eb, #205072);
  background-size: cover;
} */

 a:visited {
  background-color: #00023D;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;  
}
a:link{
  border-radius: 15px;
  background-color: #37c863;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
table, th, td {
border: 1px solid;
border-collapse: collapse;
border-color: #c6c6c6;
}
th{
  color:white;
  background-color: #00023D;

}
td{
  height:30px;
  text-align: center
}

/* tr:nth-child(odd) {
  background-color: #76C453;
} */
</style>
<link rel="stylesheet" href="style.css"></link> 
<br><br>
<table  class="table" border ="2" align = "center" style="width:55%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
<thead><tr>
                    <th><h2><strong><center>Supervisor Name</center></strong></h2></th>
                    <th><h2><strong><center>
                      Email
                      </center></strong></h2></th>
                    <th><h2><strong><center>
                      Department
                      </center></strong></h2></th>
                    <th><h2><strong><center>
                    Action
                    </center></strong></h2></th>
                   </tr>
                  </thead>
                <tbody>

                  <?php
                  include_once "includes/connect.inc.php";
                  $sql1="SELECT * from supervisor WHERE flag=0 ORDER BY id DESC";
                  $result1= mysqli_query($conn,$sql1);
                  
                  
                  while ($row = mysqli_fetch_array($result1))
                  {
                   
                               echo '<tr>
                              <td>'.$row["name"].'</td>
                              <td>'.$row["email"].'</td>
                              <td>'.$row["department"].'</td>';
                              
                            
                                  echo'<td><a href="includes/approvesupervisor.inc.php?id='.$row['id'].'">Approve </a></td>
                                  ';
                                
                                
                                echo '</tr>';
                }
                
                  ?>




                </tbody>
              </table>
<br><div align="center"><a href="adminpage.php">Back</a></div>             
             