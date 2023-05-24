<?php
include_once "navbar1.php";
?><style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

body{
    width: 100%;
    font-family: 100%;
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg,white, #EBE2FD);
    /* display: flex; */
    justify-content: center;
    flex-direction: column;
}
a{
    text-decoration: none;
}


.h1-text{
    font-size: 2rem;
    margin: 40px 0;
    color: #2c2c2c;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
}

.h1-text i{
    background-color: #509bfc;
    color: #fff;
    width: 40px;
    height: 40px;
    box-shadow: 2px 5px 30px rgba(80, 123, 252, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1rem;
    margin: 0 20px;
}

.container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
} 


.box{
    position: relative;
    min-width: 250px;
    background-color: #fff;
    box-shadow: 2px 3px 30px rgba(0,0,0,0.3);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    margin: 20px;
    position: relative;
    border-radius: 10px;
}


.top-bar{
    width: 50%;
    height: 4px;
    background: #507bfc;
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 0px 0px 10px 10px;
}

.top{
    display: flex;
    justify-content: space-between;
    align-items:center ;
    width: 100%;
}

.fa-check-circle{
    color: #17b667;
}

/* creating heart */
.heart{
    color: rgba(155,155,155);
}
.heart::before{
    content: '\f004';
    font-family: fontawesome;
    line-height: 30px;
    cursor: pointer;
    z-index: 1;
    transition: all 0.3s;
}
.box .heart-btn:checked ~ .heart::before{
    color:#e41934
}
.heart-btn{
    position: absolute;
    top: 25px;
    right: 20px;
    padding: 1rem;
    display: none;
}


.content img{
    width: 90px;
    height: 90px;
    border-radius:100px;
    overflow: hidden;
    object-fit: cover;
    object-position: top;
}
.content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.content strong{
    font-weight: 500;
    color: #141414;
    margin-top: 10px;
}
.content p{
    font-size: 0.9rem;
    color: #7a7a7a;
    margin: 4px 0px 10px 0px;
    cursor: pointer;
}
.content p:hover{
    text-decoration: underline;
}

.btn{
    margin-top: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.btn a i{
    margin-right: 9px;
}
.btn a{
    border-radius: 20px;
    color: #8b8b8b;
    padding: 8px 20px;
    font-size: 0.9rem;
}
.btn a:hover{
    color: #fff;
    box-shadow: 2px 5px 15px rgba(80,123,252,0.05);
    background-color: #507bfc;
    transition: all ease 0.5s;
}
.about-section {
  padding: 50px;
  text-align: center;
  background: linear-gradient(120deg, #4CA5B3, #7F40F2);
  color: black;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<h1 class="h1-text">
  <i class="fa fa-users" aria-hidden="true"></i>Team Members
</h1>
<div class="container">
  <div class="box">
    <div class="top-bar"></div>
    <div class="top">
      <i class="fa fa-check-circle" aria-hidden="true"></i>
      <input type="checkbox" class="heart-btn" id="heart-btn-1">
      <label class="heart" for="heart-btn-1"></label>
    </div>
    <div class="content">
      <img src="images\team\sal.jpg" alt="">
      <strong>Saloni Azad</strong>
      <p>Developer</p>
      <p>saloni_m220271cs@nitc.ac.in</p>
      
    </div>
   
  </div>
  <div class="box">
    <div class="top-bar"></div>
    <div class="top">
      <div>
        <i class="fa fa-check-circle" aria-hidden="true"></i>
      </div>
      <div>
        <input type="checkbox" class="heart-btn" id="heart-btn-2">
        <label class="heart" for="heart-btn-2"></label>
      </div>
    </div>
    <div class="content">
    <img src="images\team\shar1.jpg" alt="">
      <strong>Sharon Binu George</strong>
      <p>Developer</p>
      <p>sharon_m220119cs@nitc.ac.in</p>
      
    </div>
    
  </div>
  <div class="box">
    <div class="top-bar"></div>
    <div class="top">
      <i class="fa fa-check-circle" aria-hidden="true"></i>
      <input type="checkbox" class="heart-btn" id="heart-btn-3">
      <label class="heart" for="heart-btn-3"></label>
    </div>
    <div class="content">
    <img src="images\team\shas.jpg" alt="">
      <strong>Shashank N S</strong>
      <p>Lead Developer</p>
      <p>shashank_m220251cs@nitc.ac.in</p>
    </div>
    
  </div>
  <div class="box">
    <div class="top-bar"></div>
    <div class="top">
      <i class="fa fa-check-circle" aria-hidden="true"></i>
      <input type="checkbox" class="heart-btn" id="heart-btn-4">
      <label class="heart" for="heart-btn-4"></label>
    </div>
    <div class="content">
    <img src="images\team\shr1.jpg" alt="">
    <strong>Shreya Dutta</strong>
    <p>Developer</p>
      <p>shreya_m220267cs@nitc.ac.in</p>
    </div>
    
  </div>
  <div class="box">
    <div class="top-bar"></div>
    <div class="top">
      <i class="fa fa-check-circle" aria-hidden="true"></i>
      <input type="checkbox" class="heart-btn" id="heart-btn-5">
      <label class="heart" for="heart-btn-5"></label>
    </div>
    <div class="content">
    <img src="images\team\suv1.jpg" alt="">
      <strong>Subhranil Barua</strong>
      <p>Developer</p>
      <p>subhranil_m220294cs@nitc.ac.in</p>
    </div>
    
  </div>
</div>
<br>
<div class="about-section">
  <h1>About Us</h1><br>
  <p>We are a young college team with enormous love for coding and building softwares who dares to think big and not affraid to be different. 
    Our mission is to provide a centralized platform to students and faculties to view, grade and access various MTech thesis/projects.
</p>
</div>