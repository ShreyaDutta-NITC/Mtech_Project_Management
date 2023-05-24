<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@500&display=swap');
body{
    margin: 0;
    padding: 0;
    font-family: montserrat ;
    background: linear-gradient(120deg,#2980b9, #8e44ad);
    height: 100vh;
    overflow: hidden;
}
.conter{
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: linear-gradient(120deg,white, #EBE2FD);
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.conter h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
}
.conter form{
    padding: 0 40px;
    box-sizing: border-box;
}
form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}
.txt_field input{
    width: 100%;
    padding:  0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}
.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}
.pass:hover{
    text-decoration: underline;
}
input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
input[type="submit"]:hover{
    border-color: #2691d9
    transparent 0.5s;
}
.signup_link{
    margin: 30px;
    text-align: center;
    font-size: 16px;
    color: #666666;
}
.signup_link a{
    color: #2691d9;
    text-decoration: none;
}
.signup_link a:hover{
    text-decoration: underline;
}
a,t{
    color: grey;
}
submit{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}
</style>

<html lang="en">
<head>
<link rel = "icon" href = "images/download.png" type = "image/x-icon">
<title>NIT-Calicut</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="conter">
    <?php
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, "login=empty") !== false) {
  echo '<div class="col-md-12 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert"style="margin-left: .333333%;">
          Fill out the username & password  !
        </div>';
}elseif (strpos($url, "login=username") !== false) {
  echo '<div class="col-md-12 offset-md-12 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert"style="margin-left: .333333%;">
          Username does not exist!
        </div>';
}elseif (strpos($url, "login=error") !== false) {
  echo '<div class="col-md-12 offset-md-4 col-sm-4 offset-sm-4 text-center alert alert-danger" role="alert"style="margin-left: .333333%;">
          Username or password is incorrect!
        </div>';
}
?>
        <h1>Login</h1>
        <form action="includes/login.inc.php" method="post" >
            <div class="txt_field"><t>UserName<t>
                <input type="text" name="email" required>
                <span></span>
            </div>
            <div class="txt_field"><t>Password<t>
                <input type="password" name="pass" required>
                <span></span>
            </div>
            <div class="pass"><a href="forgotpass.php" >  Forgot Password?</a> </div>
            <input class="submit" type="submit" name="submit" value="Login">
            <div class="signup_link">
                Not a member? 
                <a href="register1.php">Register</a>
                <center><a href="index.php">Go Back</a>
            </div>
        </form>
    </div>
</body>
</html>