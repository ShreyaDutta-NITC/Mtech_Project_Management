<?php
include_once "navbar1.php";
?>





<style>
 @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  
  font-family: 'Poppins', sans-serif;
}


/* body {
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
  margin: 0;
  padding: 0;
  
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 40px;

} */
#wrap {
  width: 50%;
  margin: auto;
  align-items: center;
  justify-content: center;
  background: #fff;
  overflow: hidden;
  padding: 15px;
  
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 400px;
  border: 3px solid green;
}

</style>
<body>


    <!--main content start-->
    <div id="wrap">
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9">
            <div class="cen">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> <strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Propose Topic</strong></h3>
</div>



              <?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, "signup=empty") !== false) {
  echo '<div class="col-md-12 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert">
          Fill out all the fields!
        </div>';

} elseif (strpos($url, "signup=success")!== false) {
  // Wait for 5 seconds and then redirect user to login page
  header("refresh:2; url=login.php");
  echo '<div class="col-md-12 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-success">Account created, Redirecting..</div>';
} elseif (strpos($url, "signup=failed")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Enter valid date
        </div>';
}
elseif (strpos($url, "signup=fail")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Select atleast one division
        </div>';
}
elseif (strpos($url, "signup=nameerror")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Add Session Name
        </div>';
}
elseif (strpos($url, "signup=feeserror")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Add Fees Amount
        </div>';
}
elseif (strpos($url, "signup=timeerror")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Add Time of Sessions
        </div>';
}
elseif (strpos($url, "signup=dayerror")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Select atleast one day
        </div>';
}
elseif (strpos($url, "signup=imgerror")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Select Image
        </div>';
}
elseif (strpos($url, "signup=venueerror")!== false) {
  echo '<div class="col-md-8 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger lastname" role="alert">
          Add Venue
        </div>';
}
include_once "includes/connect.inc.php";
$sql="SELECT * FROM department";
$res=mysqli_query($conn,$sql);

$sql1="SELECT * FROM supervisor WHERE flag=1";
$res1=mysqli_query($conn,$sql1);
?>     




            
          </div>
        </div>
        <div class="center">
        <div class="row">
          <div class="col-lg-11">
            <section class="panel">
              
              <div class="panel-body">
                <form class="form-horizontal " action="includes/proposal.inc.php "method="post" enctype="multipart/form-data">
                 
<div class="form-group row">
                    
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"><strong>Thesis Topic</strong></label>
                    <div class="col-sm-4">
                      <input type="text"  name="topic" class="form-control " required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label"><strong>Topic Area(s)</strong></label>
                    <small>(Seperated by comma)</small>
                    <div class="col-sm-4">
                      <input type="text" name="keyword" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="dept">Select Department:</label>
  <select name="department" id="dept">


    <?php
    while($row=mysqli_fetch_array($res)){
      echo'
    <option value="'.$row['name'].'">'.$row['name'].'</option>';
    }?>
    
  </select>
                  </div>
                  <div class="form-group">
                  <label for="supervisor">Select Supervisor:</label>
  <select name="supervisor" id="supervisor">
    <?php
    while($row1=mysqli_fetch_array($res1)){
      echo'
    <option value="'.$row1['name'].'">'.$row1['name'].'</option>';
    }?>
    
  </select>
                  </div>
       
             <div class="col-xs-12 col-md-12 col-sm-12"  align="center">
             <button class="top col-md-12 offset-md-3 btn btn-primary" name="submit" type="submit" style="width: 500px;5%;padding: 5px 13px" >Save</button>
</div></div>

             </div>
             

             
                </form>
              </div>

            </section>
           
       
           
  </section>
  <!-- container section end -->
  </div>
</body>

</html>