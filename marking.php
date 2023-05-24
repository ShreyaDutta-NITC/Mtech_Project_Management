<?php
include_once "navbar1.php";
?>

<body>
<div align="right"><a href="super_profile.php">Back</a></div>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9">
            
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> <strong>Evaluation</strong></h3>
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

?>     
      
          </div>
        </div>
        <div class="row">
          <div class="col-lg-11">
            <section class="panel">
              
              <div class="panel-body">
                <form class="form-horizontal " action="includes/marking.inc.php "method="post" enctype="multipart/form-data">
                 
<div class="form-group row">
                    
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><strong>Attachments</strong></label>
                    <div class="col-sm-4">
                        <?php
                        $id=$_GET['id'];
                    $sql="SELECT * FROM `evaluations` WHERE id=".$id;
                    $res=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($res);
                    $arr=explode('$$',$row['attachments']);
                    for($i=1;$i<sizeof($arr);$i++){
        echo '<a href="download.php?path=Docs/'.$arr[$i].'">'.$arr[$i].'</a><br>';
    }
    ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"><strong>Marks</strong></label>
                    <div class="col-sm-4">
                      <input type="text" name="marks" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label"><strong>Remarks</strong></label>
                    <div class="col-sm-4">
                      <input type="text" name="remark" class="form-control" required>
                    </div>
                  </div>
       
                  <input type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control" required>     
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