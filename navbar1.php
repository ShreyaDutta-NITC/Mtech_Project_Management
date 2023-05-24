<style>
* {
    --gray: grey;
    --black: #000;
    --white: #fff;
    --green: #91f600;

    /* // default colors */
    --body-background: #fff;
    --hover-color: #91f600;
    --header-background: #000;
    --anchor-color: #fff;
    --heading-color: #b2b2b2;
    --paragraph-color: #b2b2b2;
    --anchor-active-color: #91f600;
}  

.title {
  font-family: 'Poppins';
    font-size: 1.2em;
}

.green {
    color: var(--green);
}

.white {
    color: var(--white);
  font-size: .8em;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}



a {
    text-decoration: none;
}

a.active {
    color: var(--anchor-active-color);
    font-weight: var(--anchor-active-font-weight);
}

a:hover {
    color: var(--hover-color);
}

header {
    align-items: center;
    display: flex;
    background: linear-gradient(120deg, #4CA5B3, #7F40F2);
    justify-content: space-around;
    flex-flow: row wrap;
    padding: 1em 0;
}

.section {
    flex-grow: 1;
}

.section.logo {
    margin-left: 2.5em;
}

.logo {
    font-size: 1.2em;
    font-weight: bold;
    text-transform: uppercase;
}

ul {
    list-style-type: none;
    display: flex;
    flex-flow: row nowrap;
    width: 500px;
    margin: 0;
    padding: 0;
}

ul li {
    flex-grow: 1;
    text-align: center;
    width: 70px;
}

ul li a {
    color: var(--anchor-color);
    font-size: .9rem;
    text-transform: uppercase;
}

header div:nth-child(1) {
    flex-grow: 8;
}

header div:nth-child(1) img {
    margin-left: 25px;
}

.box-shadow {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

@media all and (max-width: 800px) {
    header {
        justify-content: space-around;
    }

    .container {
        padding: 50px;
    }
}

@media only screen and (max-width:542px) {
    header div:nth-child(1) {
        margin: 0 auto;
        display: block;
        padding-bottom: 0;
    }

    header {
        flex-direction: column;
    }

    .section {
        flex-grow: 1;
        text-align: center;
    }

    .section.logo {
        margin: 0;
    }

    ul {
        background-color: #232323;
        width: 100%;
        margin-top: 15px;
    }

    ul li {
        width: 50%;
        padding: 5px;
    }
}

</style>
<?php
session_start();
?>

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">

<head>
<link rel = "icon" href = "images/download.png" type = "image/x-icon">
<title>NIT-Calicut</title>
</head>
 <header class="box-shadow">
    
    <div class="section logo">
        <ul><img src="images/nitc_logo_icon.png" width=8%; height=100%;><span><a href="index.php" style="color:black;">National Institute of Technology, Calicut</a></span></ul>
    </div>

    <div class="section">
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="about.php">About US</a></li>

        <?php
            
                if(isset($_SESSION['id']))
                {
                  if(strcmp($_SESSION['privilege'],"student")==0)
                      {
                        echo '<li><a href="studentpage.php" >Dashboard</a></li>
                      <li><a href="includes/logout.inc.php" >Log out</a></li>';
                      }
                  if(strcmp($_SESSION['privilege'],"supervisor")==0)
                      {
                        echo '<li><a href="super_profile.php" >Dashboard</a></li>
                      <li><a href="includes/logout.inc.php" >Log out</a></li>';
                      }
                  if(strcmp($_SESSION['privilege'],"admin")==0)
                      {
                        echo '
                      <li><a href="includes/logout.inc.php" >Log out</a></li>';
                      }
                    
                }else{
                    echo '<li ><a  style="padding-right:5px;" href="login1.php">Login</a></li>
                          <li ><a  style="padding-right:5px;" href="register1.php">Register</a></li>';
                }
                ?>
      </ul>
    </div>
  </header>