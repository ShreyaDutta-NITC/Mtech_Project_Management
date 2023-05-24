

    

<body>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> <strong>Add Thesis</strong></h3>
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
        <div class="row">
          <div class="col-lg-11">
            <section class="panel">
              <header class="panel-heading">
                <strong> FORM</strong>
              </header>
              <div class="panel-body">
                <form class="form-horizontal " action="includes/addthesis.inc.php "method="post" enctype="multipart/form-data">
                 
<div class="form-group row">
                    <div class="input-group md-6">
                    <label for="profilepic"  class="col-sm-6 col-form-label" align="right" style="font-size: 2rem;">Upload files:</label> 
                    <div class="form-group col-md-6">
                        <input name="profilepic[]" class="mx-3 mb-3" type="file" multiple="multiple" style="font-size: 1.5rem;">
                            <!--<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        -->
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><strong>Thesis Topic</strong></label>
                    <div class="col-sm-4">
                      <input type="text"  name="name" class="form-control " required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"><strong>Abstract</strong></label>
                    <div class="col-sm-4">
                      <input type="text" name="abstract" class="form-control" required>
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
       
            
             <div class="col-xs-12 col-md-12 col-sm-12" align="center" >
             <button class="top col-md-12 offset-md-3 btn btn-primary" name="submit" type="submit" style="width:25%;padding: 5px 13px" >Save</button>
</div>

             </div>
             

             
                </form>
              </div>

            </section>
           
       
           
  </section>
  <!-- container section end -->
  
</body>
 
</html>