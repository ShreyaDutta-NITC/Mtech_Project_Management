<?php
include_once "navbar1.php";
?>
<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css.bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> -->
</head>

<body>
<?php

if(isset($_SESSION['id']) && strcmp($_SESSION['privilege'],"student")==0){
    echo '<div align="right">
    <span  style="display: inline-block; background-color:#b8ff60;border-radius: 0.25rem; padding: 0.25em 0.4em;">
    <a href="proposal1.php" style="color:black;">Apply for Project</a>
    </span>
</div>';
}

?>
<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700,900');

/* Base styling */


/* body {
    margin-left: 10%;
} */
.col-card{
    margin-left: 15%;
}
.card {
  background-color: #fff8ff;
  max-width: 1000px;
  height:40%;
  border-radius: 25px;
  box-shadow: 24px 24px 80px rgba(0, 0, 0, 0.2);
  padding: 20px 20px 28px 20px;
  box-sizing: border-box;
  /* margin: 40px; */
  display: flex;
  flex-direction: column;

}

@media (min-width: 576px) {
  .card {
    flex-direction: row;
    align-items: center;
    margin: 20px;
    padding: 32px;
  }
}

@media (min-width: 576px) {
  .card__content {
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
  }
}

.search__container {
        padding-top: 64px;
    }

.search__title {
        font-size: 22px;
        font-weight: 900;
        text-align: center;
        color: black;
    }

.search__input {
        width: 40%;
        padding: 12px 24px;

        background-color: transparent;
        transition: transform 250ms ease-in-out;
        font-size: 14px;
        line-height: 18px;
        
        color: #575756;
        background-color: transparent;
/*         background-image: url(http://mihaeltomic.com/codepen/input-search/ic_search_black_24px.svg); */
 
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-size: 18px 18px;
        background-position: 95% center;
        border-radius: 50px;
        border: 1px solid #575756;
        transition: all 250ms ease-in-out;
        backface-visibility: hidden;
        transform-style: preserve-3d;
    }

.search__input::placeholder {
            color: rgba(87, 87, 86, 0.8);
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

.search__input:hover,
        .search__input:focus {
            padding: 12px 0;
            outline: 0;
            border: 1px solid transparent;
            border-bottom: 1px solid #575756;
            border-radius: 0;
            background-position: 100% center; 
        }
      
/* .image{
    width: 100%;
    height: 100%;
    background-image: url(https://lh3.googleusercontent.com/pw/AMWts8D6hQFGIHzsDncC4xgKlpCB_EpAm0rzrqPJSl6DnEEzcmVyDza5rswsNsFQcE3tlTG1FtkmKii9YchfxAeQGfBOyVOY-_DP7gIrCtuPn61ZeHSsdgRx=w2400);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}                    */

.topic-badge[_ngcontent-ngs-c3] {
    /* margin-top: 0.75rem; */
}

.badge-success {
    color: #fff;
    background-color: #28a745;
}
.badge-mild {
    color: #fff;
    background-color: orange;
}

.badge {
    display: inline-block; 
    padding: 0.25em 0.4em;   
    font-size: 100%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
    /* -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

</style>
    <div class="search__container" ">
        <p class="search__title">
            Search Name
        </p>
        <center><input class="search__input" name="live_search" id="live_search" autocomplete="off" type="text" placeholder="Search...">
        <div id="search_result"></div></center>
    </div> <br><br>

    <!-- <div class="container mt-5" style="max-width: 555px;">
        <div class="card-header alert alert-warning text-center mb-3">
            <h2> Search Thesis</h2>
        </div>
        <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off"
            placeholder="Search ...">
        <div id="search_result"></div>
    </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');
                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script>


    <?php
    include_once "includes/connect.inc.php";

        // $name = $_SESSION['name'];
        $sql = "SELECT * FROM thesis WHERE status!=0";
        $res = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res)){
            $sql1="SELECT * FROM evaluations WHERE thesis_id=".$row['id']." ORDER BY id DESC";
            $res1 = mysqli_query($conn,$sql1);

            $sqls="SELECT * FROM student WHERE id=".$row['student_id'];
            $ress = mysqli_query($conn,$sqls);
            $rows=mysqli_fetch_array($ress);
            
            echo '<div class="col-card">
            <div class="card" >
            <div class="card__content">';
            if($row['status']=="2"){
                echo '<p class="card-text" style="float:left;"><span _ngcontent-ngs-c3="" class="topic-badge badge badge-success">Completed</span></p>';
                }
            else{
                echo '<p class="card-text" style="float:left;"><span _ngcontent-ngs-c3="" class="topic-badge badge badge-mild">Ongoing</span></p>';
            }
              echo'<h2><p style="text-align:center;">'.$row['name'].'</p></h2><br>
              <h3 class="card-text" style="text-align:center; font-style: italic;">Topic areas : '.$row['keyword'].' </h3><br>
              <div>
              <h4 style="float:left;">Supervisor: '.$row['supervisor_name'].'</h4>
              <h4 style="text-align:right;">Student: '.$rows['name'].'</h4>
              </div><br>
              <p><strong>Abstract:</strong>'.$row['abstract'].'<p><br>';

              if($row1=mysqli_fetch_array($res1)){
                    echo '<p class="card-text" style="text-align:center;color:grey;"><small class="text-muted">Last modified: '.$row1['date'].'</small></p>';
                }
              else{
                    echo '<p class="card-text" style="text-align:center;color:grey;"><small class="text-muted">Grading yet to be done</small></p>';
                }
              
            
              echo'
            </div>
          </div>
          </div><br>';
        }
    ?>



</body>
<!-- </html> -->