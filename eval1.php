
<?php
include_once "includes/connect.inc.php";
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(120deg,white, #EBE2FD);
}
.wrapper{
    max-width: 400px;
    width: 100%;
    background: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.4);
}

.wrapper .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}
.wrapper .title::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 100%;
    background: linear-gradient(135deg, #71B7E6, #9B59B6);
}
.wrapper form .user-details{
    display: inline;
    flex-wrap: wrap;
    /* justify-content: space-between;
    margin: 20px 0 12px 0; */
}
form .user-details .input-box{
    margin-bottom: 15px;
    /* width: calc(100% / 2 - 20px); */
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
}
.user-details .input-box .details{
    font-weight: 500;
    display: block;
    margin-bottom: 5px;
}

.user-details .input-box input{
    height: 45px;
    width: 90%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all .3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #9B59B6;
}


#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
    border-color: #D9D9D9;
    background: #9B59B6;
}

form input[type="radio"]{
    display: none;
}

form .button{
    height: 45px;
    margin: 45px 0;
}
form .button input{
    height: 100%;
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
}
form .button input:hover{
    background: linear-gradient(-135deg, #71B7E6, #9B59B6);
}

/* Media Query */
@media (max-width: 584px) {
    .wrapper{
        max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: 100%;
    }
    /* .gender-details .category{
        width: 100%;
    } */
    .wrapper form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        width: 0;
    }
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
   box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.4);

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
<head>
<link rel = "icon" href = "images/download.png" type = "image/x-icon">
<title>NIT-Calicut</title>
</head>
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
$id=$_GET['id'];
?> 

<div class="wrapper">
        <div class="title">Evaluation Details</div><br>
        <form action="includes/assess.inc.php "method="post" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details"><strong>Name of Evaluation</strong></span>
                    <input type="text"  name="name"  required>
                </div>
                <div class="input-box">
                    <span class="details"><strong>Total Marks</strong></span>
                    <input type="text" name="outofmarks" required>
                </div>
                <div class="input-box">
                    <span class="details"><strong>Select Date</strong></span>
                    <input type="date" min="<?php echo date("Y-m-d");?>" name="date" required>
                </div>
                
                <input type="hidden" value="<?php echo $id ?>" name="id">   
            </div>
            
            <div class="button">
                <input type="submit"  name="submit" value="Save" >
            </div>
            <center><a style="color:grey;" href="index.php">Go Back</a>

        </form>
    </div>