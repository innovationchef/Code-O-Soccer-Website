<?php

session_start();
require 'connection.php';
function getuserfield($field){
$query = "SELECT $field FROM `krssgzj9_registration`.`users` WHERE `id` = ".$_SESSION['user_id']." ";
 if($query_run = mysql_query($query)){
  if($query_result = mysql_result($query_run,0,$field)){
  return $query_result;
  }
 }
}
function logged(){
$var=(isset($_SESSION['user_id']) && (!empty($_SESSION['user_id']))) ;
return $var;
}
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  
  <title>Code-O-Soccer || KRSSG </title>
  <base target="_self">
  <meta name="description" content="The national level Code-o-Soccer is here. Enter to Hack." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" value="notranslate">
  <link rel="shortcut icon" href="/img/codeply_ico.jpg">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />

  <style  type="text/css">
        span.logo a{
        color:grey;
        text-decoration: none;
          /*font-family: "Lucida Sans Typewriter", "Lucida Console", Monaco, "Bitstream Vera Sans Mono", monospace;*/
        }
        .containermarquee {
        margin: 1em auto;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        }
        .marquee {
        top: 6em;
        position: relative;
        box-sizing: border-box;
        animation: marquee 15s linear infinite;
        }
        .marquee:hover {
        animation-play-state: paused;
        }
        @keyframes marquee {
        0%   { top:   8em }
        100% { top: -11em }
        }
        .microsoft .marquee {
        margin: 0;
        padding: 0 1em;
        line-height: 1.5em;
        font: 1em 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
        }
        .microsoft:before, .microsoft::before,
        .microsoft:after,  .microsoft::after {
        left: 0;
        z-index: 1;
        content: '';
        position: absolute;
        pointer-events: none;
        width: 100%; height: 2em;
        background-image: linear-gradient(top, #FFF, rgba(255,255,255,0));
        }
        .microsoft:after, .microsoft::after {
        bottom: 0;
        transform: rotate(180deg);
        }
        .microsoft:before, .microsoft::before {
        top: 0;
        }
        .vanity {
        color: #333;
        text-align: center;
        font: .75em 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
        }
        .vanity a, .microsoft a {
        color: #1570A6;
        transition: color .5s;
        text-decoration: none;
        }
        .vanity a:hover, .microsoft a:hover {
        color: #F65314;
        }
  </style>
  <style>

ul.social-buttons{margin-bottom:0}
ul.social-buttons li a{display:block;background-color:#222;height:40px;width:40px;border-radius:100%;font-size:20px;line-height:40px;position:relative;color:#fff;outline:0;-webkit-transition:all .3s;-moz-transition:all .3s;transition:all .3s}
ul.social-buttons li a:hover,ul.social-buttons li a:focus,ul.social-buttons li a:active{background-color:#F65314}
.btn:focus,.btn:active,.btn.active,.btn:active:focus{outline:0}
::selection{text-shadow:none;background:#F65314}
img::selection{background:0 0}
img::-moz-selection{background:0 0}
body{webkit-tap-highlight-color:#F65314}

  </style>
  <style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lato:300,400);
@import url(http://fonts.googleapis.com/css?family=Bitter:400);
html,body {
    height:100%;
    background:center no-repeat fixed url("background.jpg");
    background-size: cover;
    color:#444;
    font-family: 'Lato', sans-serif;
}
@media (min-width:768px) {
    h1 {
        font-size:68px;
    }
}

a {
    color:#999;
}

a:hover {
    color:#111;
}

.btn,.well,.panel {
    border-radius:0;
}

.btn-danger {
    background-color:#3366FF;
    border-color:#3366FF;
}
.btn-danger:hover {
    background-color:#002081;
    border-color:#002081;
}
.btn-danger:active {
    background-color:#002081;
    border-color:#002081;
}
.text-danger, a.text-danger {
    color:#3366FF;
}

.btn-huge {
    padding:17px 22px;
    font-size:22px;
}

.lato {
    font-family: 'Lato', sans-serif;
}

.bitter {
    font-family: 'Bitter', serif;
}

.icon-bar {
    background-color:#fff;
}

.navbar-trans {
    background-color:#2b2b2b;
    color:#cdcdcd;
    border-width:0;
}

.navbar-trans .navbar-brand, .navbar-trans >.container-fluid .navbar-brand {
    padding: 14px;
    color:#47B5FF;
}

.navbar-trans li>a:focus,.navbar-trans li.active {
    background-color:#3366FF; //#f44d3c;
    color:#000;
}

.navbar-trans li>a:hover {
    background-color:#1F3D99;
    color:#fff;
    opacity:0.5;
}

.navbar-trans a{
    color:#cdcdcd;
    letter-spacing:1px;
}

.navbar-trans .form-control:focus {
    border-color: #eee;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(100,100,100,0.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(100,100,100,0.6);
}

.scroll-down {
  position: absolute;
  left: 50%;
  bottom: 40px;
  border: 2px solid #fff;
  border-radius: 50%;
  height: 50px;
  width: 50px;
  margin-left: -15px;
  display: block;
  padding: 7px;
  text-align: center;
  z-index:-1
}

.scroll-up {
  position: fixed;
  display: none;
  z-index: 999;
  bottom: 2em;
  right: 2em;
}

.scroll-up a {
  background-color: rgba(135, 135, 135, 0.5);
  display: block;
  width: 35px;
  height: 35px;
  text-align: center;
  color: #fff;
  font-size: 15px;
  line-height: 30px;
}

section {
    padding-top:70px;  
    padding-bottom:50px;
    min-height:100%;
    min-height:calc(100% - 0);
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

@media (min-width:768px) {
    .v-center {
        height: 50%;
        overflow: visible;
        margin: auto;
        position: absolute;
        top: 0; left: 0; bottom: 0; right: 0;
    }
}
  
#section1, #section3, #section8, #section9 {
    background-color: rgba(0,0,0,0.7);
    color:#fff;
    font-family: 'Bitter', serif;
}
  
#section4 {
    background-color: #f6f6f6;
    color:#444;
}
  
#section2 {
    background-color: #fff;
}

#section3 {
    background-color: rgba(0,0,0,0.9);
}
#section8 {
    background-color: rgba(0,0,0,0.9);
}

#section9 {
    background-color: rgba(0,0,0,0.9);
}
#section5 {
    background-color: #fff;
}

#section6 {
    background-color: #eee;
    min-height:130px;
    padding-top:40px;
    padding-bottom:40px;
}

#section7 {
    background-color: #47B5FF;
    color: #f6f6f6;
    min-height:130px;
    padding-top:40px;
    padding-bottom:40px;
}

footer {
    background-color:#2b2b2b;
    color:#ddd;
    min-height:100px;
    padding-top:20px;
    padding-bottom:40px;
}

footer .nav>li>a {
    padding: 3px;
    color: #0000ff;
}

footer .nav>li>a:hover {
    background-color:transparent;
    color:#0000ff;
}</style>

	<style type="text/css">

.Grid--gutters {
  margin: -1em 0 0 -1em;
}
.Grid--gutters > .Grid-cell {
  padding: 1em 0 0 1em;
}


.Grid--top {
  align-items: flex-start;
}
.Grid--bottom {
  align-items: flex-end;
}
.Grid--center {
  align-items: center;
}


.Grid-cell--top {
  align-self: flex-start;
}
.Grid-cell--bottom {
  align-self: flex-end;
}
.Grid-cell--center {
  align-self: center;
}

	</style>
  
    <style>
 #cnt1 {            
     background-color:rgba(0, 0, 0, 0);
     width:90%;
     margin-bottom:70px;
 }
 .feature{
     padding: 10px 0;
    text-align: center;
 }
 .feature > div > div{
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: 0.2s;
 }
 .feature > div:hover > div{
    margin-top: -10px;
    border: 1px solid rgb(128, 128, 128);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 5px;
    background: rgba(232, 215, 215, 0.10);
    transition: 0.3s;
 }
</style>
<link rel="icon" href="https://avatars1.githubusercontent.com/u/11938153?v=3&s=200">
</head><body onload="ClearForm()">




  <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-danger" href="http://www.krssg.in">KRSSG&nbsp;</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#section1">  	&#60;&#47;&#62; </a></li>
                <li><a href="#section2">About Us</a></li>
                <?php					if(logged()){				?>
                <li><a href="#section3">Dashboard</a></li>
                <?php 	} 	?>
                <li><a href="#section4">Documentation</a></li>
                <li><a href="#section9">Timeline</a></li>
                <li><a href="#section5">FAQs</a></li>
                <li><a href="#section8">Our Team</a></li>
                <li><a href="#section6">Contact us</a></li>
                <li>&nbsp;</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
<li><a  href="https://www.facebook.com/groups/659687134167938/?notif_t=group_added_to_group" target="_blank"><span class="glyphicon glyphicon-user"></span>&nbsp Forum</a></li>
                 <?php if(!logged()) { ?>
                <li><a href="#" data-toggle="modal" data-target="#login-button"><span class="glyphicon glyphicon-log-in">&nbsp;</span>Login/Register</a></li>
                 <?php } ?>
                <?php if(logged()) { ?>
                <li><a class="btn btn-primary" href="logout.php" role="button">Logout</a></li>
                
                 <?php } ?>
            </ul>
   </div>
    </div>
</nav>










<section class="container-fluid" id="section1">
  <img src="img/logo.png" class="img-responsive center-block"  alt="logo">
<br><center><font face="Lato"> in association with</font> </center>
<img src="img/Kshitij.png" class="img-responsive center-block" alt="logo">
<br><center><font face="Lato"> The Annual Techno-Management Fest of IIT Kharagpur</font></center>



    <!-- ********************************************-->
           <div class="containermarquee">
           <div class="col header clearfix">
          <div>
            <section id="main_section">
            <div align="center">
              <h2><span class="logo" id="caption"></span><span class="logo" style="font-size:2em; font-weight:900;" id="cursor">_</span></h2>
            </div>
          </section>
              </div>
            </div>

    <!-- ********************************************-->
        <p class="text-center">
            <br>
            <?php					if(!logged()){				?>
            <a href="#" class="btn btn-primary btn-lg btn-huge lato" data-toggle="modal" data-target="#login-button" style="align:center">

<span class="fa fa-trophy fa-2x" style="vertical-align:middle">&nbsp;</span>
PRIZES WORTH <br>
<strong>&nbsp; &nbsp; &#8377 50,000</strong></a>
            <?php			}			?>
        </p>
    </div>
    <a href="#section2">
        <div class="scroll-down bounceInDown animated">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
        </a>
</section>





<section class="container-fluid" id="section2">
    <div class="container">
      <div class="row clearfix">
        <div class="col-lg-6 ">
          <p class="text-justify"><font size="4">
Comprising  of  a  bunch  of  ardent  robotics    technocrats    from    the  college, we  are  working  together to build Autonomous Soccer playing robots. <br>
<strong>Research Objective</strong> -  build  and  study  cooperative multiagent      systems   in     highly dynamic  adversarial  environments.<BR>
<strong> Participation </strong> <br>
<UL>
<li><a href = "http://robocupssl.cpe.ku.ac.th/">ROBOCUP</a></li>
<li><a href = "http://www.fira.net/main/">Federation of International Robo-Soccer Association(FIRA)</a></li>
</ul><br>
</p>
<p class="text-justify"> Code-O-Soccer is a coding competition conducted by Kharagpur RoboSoccer Students' Group. This is a<strong> first of its kind </strong> competition wherein soccer strategies brewing within one's mind are implemented on robots using techniques of Artificial Intelligence.</p>
<p class="text-justify"> The main aim of the event is to introduce the concept of autonomous soccer playing robots in students mind and motivating students to create a challenging strategy using our API on a <b>THREE BY THREE</b>  robot match for which robots will be provided by us during the event. The participants will also be provided with a simulator with game environments (playground, robots,score board, etc.) to test their codes.</p>
        </div>
        <div class="col-lg-6 info" >


                                        <p class="text-justify">
                                        For this event, all you need is:
                                        <br> i. Interest in programming and the zeal to try out new APIs
                                        <br>ii. Enthusiasm about autonomous soccer playing robots
                                        <br><font> This time it is being conducted nation-wide as a online coding competition with online workshops for the event.
                        </font></p>
<div class="panel panel-primary">
          <div class="panel-heading"><h3><span class="glyphicon glyphicon-envelope"></span>&nbsp</h3></div>
          <div class="panel-body">
            <marquee  behavior="scroll" direction="up" scrollamount="3" width="300" height="180"><Font size="3">
<ul>
<li>Prize Money : Rs 50,000 + </li>
<li>Join our facebook forum and clear your doubts regarding the competition </li>
<li><b> First Video tutorial has been uploaded!</b></li>
<li><b>IMPORTANT</b>Participants are requested to download the API again as strategy.rar was missing in the earlier version</li>
<li><b>Deadline has been extended!!</b></li>
</ul>

</Font></marquee>
            </div>
          </div>

          
        
          </div>
</section>



 <?php	 if(logged()){ ?>
<section class="container-fluid" id="section3">


<div class="page-header">
  <h1><center>
  <?php 	if(logged()){	$t_name=getuserfield('
  name');	echo $t_name;

        //$t_id=getuserid('id');	echo $t_id;	}
        }
        ?>
  </center>
  </h1>
 </div>







<div class="container" id="cnt1">
    <div class="row feature">
        <div class="col-md-3">
            <div>
                              <form class="form-horizontal" role="form" method="post" action="member1_register.php">
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Name : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="Name" value="<?php $t_name=getuserfield('member1_name'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">College : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member1_college" name="member1_college" placeholder="College" value="<?php $t_name=getuserfield('member1_college'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Email : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="Email" value="<?php $t_name=getuserfield('member1_email'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Mobile No. : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member1_phone" name="member1_phone" placeholder="Mobile No." value="<?php $t_name=getuserfield('member1_phone'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Year :  </label>
                                <div class="col-sm-5">
                                  <select class="form-control" name="member1_year"  id="member1_year"   value="<?php $year=getuserfield('member1_year'); ?>">
                                  <option selected>Year</option>
                                  <option <?php if($year=='1') echo "selected"; ?>>1</option>
                                  <option <?php if($year=='2') echo "selected"; ?>>2</option>
                                  <option <?php if($year=='3') echo "selected"; ?>>3</option>
                                  <option <?php if($year=='4') echo "selected"; ?>>4</option>
                                  <option <?php if($year=='5') echo "selected"; ?>>5</option>
                                  
                                 </select>
                                </div>
                              </div>
                              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
                            </form>
            </div>
        </div>

        <div class="col-md-3">
            <div>
<form class="form-horizontal" role="form" method="post" action="member2_register.php">
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Name : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member2_name" name="member2_name" placeholder="Name" value="<?php $t_name=getuserfield('member2_name'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">College : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member2_college" name="member2_college" placeholder="College" value="<?php $t_name=getuserfield('member2_college'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Email : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member2_email" name="member2_email" placeholder="Email" value="<?php $t_name=getuserfield('member2_email'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Mobile No. : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member2_phone" name="member2_phone" placeholder="Mobile No." value="<?php $t_name=getuserfield('member2_phone'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Year :  </label>
                                <div class="col-sm-5">
                                  <select class="form-control" name="member2_year"  id="member2_year"   value="<?php $year=getuserfield('member2_year'); ?>">
                                  <option selected>Year</option>
                                  <option <?php if($year=='1') echo "selected"; ?>>1</option>
                                  <option <?php if($year=='2') echo "selected"; ?>>2</option>
                                  <option <?php if($year=='3') echo "selected"; ?>>3</option>
                                  <option <?php if($year=='4') echo "selected"; ?>>4</option>
                                  <option <?php if($year=='5') echo "selected"; ?>>5</option>
                                  
                                 </select>
                                </div>
                              </div>
                              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
                            </form>
            </div>
        </div>

        <div class="col-md-3">
            <div>
                              <form class="form-horizontal" role="form" method="post" action="member3_register.php">
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Name : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member3_name" name="member3_name" placeholder="Name" value="<?php $t_name=getuserfield('member3_name'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">College : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member3_college" name="member3_college" placeholder="College" value="<?php $t_name=getuserfield('member3_college'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Email : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member3_email" name="member3_email" placeholder="Email" value="<?php $t_name=getuserfield('member3_email'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Mobile No. : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member3_phone" name="member3_phone" placeholder="Mobile No." value="<?php $t_name=getuserfield('member3_phone'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Year :  </label>
                                <div class="col-sm-5">
                                  <select class="form-control" name="member3_year"  id="member3_year"  value="<?php $year=getuserfield('member3_year'); ?>">
                                  <option selected>Year</option>
                                  <option <?php if($year=='1') echo "selected"; ?>>1</option>
                                  <option <?php if($year=='2') echo "selected"; ?>>2</option>
                                  <option <?php if($year=='3') echo "selected"; ?>>3</option>
                                  <option <?php if($year=='4') echo "selected"; ?>>4</option>
                                  <option <?php if($year=='5') echo "selected"; ?>>5</option>
                                  
                                 </select>
                                </div>
                              </div>
                              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
                            </form>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                              <form class="form-horizontal" role="form" method="post" action="member4_register.php">
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Name : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member4_name" name="member4_name" placeholder="Name" value="<?php $t_name=getuserfield('member4_name'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">College : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member4_college" name="member4_college" placeholder="College" value="<?php $t_name=getuserfield('member4_college'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Email : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member4_email" name="member4_email" placeholder="Email" value="<?php $t_name=getuserfield('member4_email'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Mobile No. : </label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control" id="member4_phone" name="member4_phone" placeholder="Mobile No." value="<?php $t_name=getuserfield('member4_phone'); echo $t_name; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="name" class="col-sm-5 control-label">Year :  </label>
                                <div class="col-sm-5">
                                  <select class="form-control" name="member4_year"  id="member4_year"  value="<?php $year=getuserfield('member4_year'); ?>">
                                  <option selected>Year</option>
                                  <option <?php if($year=='1') echo "selected"; ?>>1</option>
                                  <option <?php if($year=='2') echo "selected"; ?>>2</option>
                                  <option <?php if($year=='3') echo "selected"; ?>>3</option>
                                  <option <?php if($year=='4') echo "selected"; ?>>4</option>
                                  <option <?php if($year=='5') echo "selected"; ?>>5</option>
                                  
                                  
                                 </select>
                                </div>
                              </div>
                              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
                            </form>
            </div>
        </div>
    </div>

<!-- <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">  -->


<!--*************************UPLOAD**********************-->


<div>
            <form role="form" action="upload.php" enctype="multipart/form-data" method="post">
              <h3><center>Upload</center></h3>
              <hr><center>
              <div class="row-fluid">

                  <div class="form-group">
                    <input type="file" name="file" id="file">
                  </div>


                  <div class="form-group">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
                  </div>
                                                                        <div> Upload Files with your teamname. Eg, teamname.zip </div>

              <center></div>
            </form>
</div>



<!--*************************UPLOAD**********************-->





<!--*************************Email-Verification**********************-->
<?php
$veri_code = getuserfield('email_verification');

if($veri_code!=-1)
{
?>
<br>
<br>
<div>
            <form role="form" action="email_verification.php"  method="post">
              <h3><center>Email-Verification</center></h3>
              <hr><center>
              <div class="row-fluid">

                  <div class="form-group">
                    <input type="text" class="form-control" id="veri_response" name="veri_response" placeholder="Verification Code" style="width: 250px" >
                  </div>


                  <div class="form-group">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
                  </div>
                                                                        
            </form>
</div>
<?php
}
/*else
{
?>
<li><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#pass-button" role="button"">Change Password</a></li>

<?php
}*/
?>
<!--*************************Email-Verification**********************-->



















<!-- Feature List - END -->

</div>
</section>

<?php	}
?>




<section class="container-fluid" id="section4">
<div class="container-fluid">
       <div class="col-lg-7">
<h2>Problem Statement</h2>
<p class="text-justify"> Develop and code the strategy for controlling a team of 3 soccer playing robots in simulator for a 3 vs 3 match . </p>
<h2>User Guidelines</h2>
<H3>Technical Setup:</h3>
  <p class="text-justify">
  <ul>
      <li>Download the API and the Debugger for which links are provided aside</li>
      <li>Download Visual Studio 2012/13 from <a href = "http://go.microsoft.com/?linkid=9816768" target="_blank"> this site </a>(for VS'12).</li>
      <li>Follow “Setting up the project “ in website for setting up the environment to code in Visual Studio</li>
  </ul>
  </p>
<H3>Description (Follow “ User Manual “) :</h3>
  <p class="text-justify">
  <ul>
      <li>The description of robot and code architecture is explained in <b>“ User Manual “ </b>.</li>
      <li>Open<i> “ Game.hpp “ </i>as described in <b>“ User Manual “</b> .</li>
      <li>Three roles are presented as <b>I) Attacker , II) Defender and III) Goalkeeper </b>.</li>
      <li>The working of these roles would be coded in their respective function definition. <br>Ex. : Open<i> “ Attacker.hpp “ </i>and you have to code inside<i> “ attacker(state , botID )“ </i>function. Same goes for other two roles.</li>
      <li><b>Main aim is to code in these three above mentioned files for respective roles.</b></li>
      <li>You can make your own skills or roles , the process is described in <b>“User Manual“</b>.</li>
      <li>The code requires state parameters and predicates , which has been discussed in <b>“User Manual“</b>.</li>
  </ul>
  </p>
<H3>Running the Code :</h3>
  <p class="text-justify">
  <ul>
      <li>Follow <b>“Running Simulator“</b> part from <b>“User Manual“</b> or <b>“Setting up the project“</b>.</li>
      <liRun as C++ in the team for which you have coded .</li>
      <li><b>Go to Simurosot folder , open "Run.bat" in text editor (ex. Notepad++) , change line 4 : from "Abhinav" to your "PC name"</b></li>
  </ul>
  </p>
</div>
  <div class="col-lg-5">
    <div class="row"> 
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <!--  <h2 class="text-center lato">Important Links</h2> 
            <hr>   -->
            <div class="">
                <div class="span4">
                    <a class="btn btn-primary btn-lg btn-block" href="https://docs.google.com/document/d/1jJPRXfhGM21KWYznIsjIciULpF541rDDwUE6RAQl9To/edit?usp=sharing" target="_blank">Setting up the Project</a><br>
                </div>
                <div class="span4">
                    <a class="btn btn-primary btn-lg btn-block" href="https://docs.google.com/document/d/1gXZJWIIaIOr4U4_2rF2v_y6mUKs8o41apBreEcjFw6U/edit?usp=sharing" target="_blank"> User Manual</a><br>
                </div>

                <div class="span4">
                    <a class="btn btn-primary btn-lg btn-block" href="https://docs.google.com/document/d/1HHjU9f4vFJ9Y6aJRiZAa3EJdiAwPMSrYJ44xJ_mb0f8/edit?usp=sharing" target="_blank">Rules</a><br>
                </div>

                <div class="span4">
          <a class="btn btn-primary btn-lg btn-block" href="https://drive.google.com/folderview?id=0B2EEwIADnp5jajROcmZidGdFUUU&usp=sharing" target="_blank"> API </a><br>
                </div>
                <div class="span4">
                    <a class="btn btn-primary btn-lg btn-block" href="https://drive.google.com/file/d/0B7ZQ5D-yntA5RWRsNk0zWnh2dnc/view?usp=sharing" target="_blank">Debugger 64 Bit</a><br>
                </div>
                <div class="span4">
                    <a class="btn btn-primary btn-lg btn-block" href="https://www.youtube.com/channel/UCgDu_L5XZAwVo31ex99p9mQ" target="_blank">Video Tutorials</a><br>
                </div>
                

            </div>
        </div>
    </div>
</div>
</div>
</section>




    <section id="section9" class="container-fluid">
        <div class="container">
            <div class="row feature">
        <div class="col-md-3">
            <div>
                <img src="img/timeline1.png" alt="Texto Alternativo" class="img-responsive">

            </div>
        </div>

        <div class="col-md-3">
            <div>
                                <img src="img/timeline2.png" alt="Texto Alternativo" class="img-responsive">
            </div>
        </div>
        <div class="col-md-3">
            <div>
                                <img src="img/timeline3.png" alt="Texto Alternativo" class="img-responsive">
            </div>
        </div>
        <div class="col-md-3">
            <div>
                                <img src="img/timeline4.png" alt="Texto Alternativo" class="img-responsive">
            </div>
        </div>

    </div>
        </div>
    </section>






<section class="container-fluid" id="section5">
     <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>FAQ</h1>
                </div>
            </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2">
            <h2 class="text-center lato"></h2>
            <hr>
            <div class="media">
                <h3>Will there be workshops for this event?</h3>
                <div class="media-body media-middle">
                    <p class="text-justify">Since this event is first of its kind being conducted in India, ONLINE workshops through Skype or Google Hangouts will be conducted
                                  to introduce the event and explain its technical details. The details of the workshops will be updated on the website and mailed to
                                  the participants.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <h3>Are coding skills necessary for participating in this event?</h3>
                <div class="media-body media-middle">
                    <p class="text-justify">Absolutely NOT, the event is about planning Soccer strategies and framing them in your codes. You can team up with people
                                  having coding skills. Through this event you can not only improve your coding skills but also develop teamwork.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <h3>Should the team members particularly belong to the same college?</h3>

                <div class="media-body media-middle">
                    <p class="text-justify">No, you can make a team with people from various fields and institutes. All you need to have is a common zeal for strategy making, programming and a mindset of erecting milestones.
                                  Each member can contribute to the code from there room via some open source platform like GITHUB.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <h3>Are there any certifications for this event?</h3>
                <div class="media-body media-middle">
                    <p class="text-justify">Yes, every participant will be awarded an online participation certificate under KRSSG research group, IIT Kharagpur.
                                  Top 20 teams will be awarded special certificate for out standing performance which will be dropped at their addresses.
                                  Top 8 Teams will get an opportunity to come to IIT Kharagpur and compete against other teams on actual bots and also compete
                                  against the team that participated in FIRA Malaysia'13 and Beijing'15.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <h3>Which coding language will be involved in the competition?</h3>
                <div class="media-body media-middle">
                    <p class="text-justify">Our code base is C++.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <h3>How will our codes be Evaluated?</h3>
                <div class="media-body media-middle">
                    <p class="text-justify">The codes will be evaluated on the same Simulator that will be provided to you putting your code against other teams in a League Tournament.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <h3>How to make submissions?</h3>
                <div class="media-body media-middle">
                    <p class="text-justify">Login you teams account and Go-To Dashboard -> File Upload. Make a zip Folder of your codes and upload it. Before the last Submission
                                  you can upload your codes as many times as you want. Every time your previous codes will be over-written in that case.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Team Section***************************************************************************************************************************** -->
    <section id="section8" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Professor In-charge</h2>
                </div>
            </div>

<div class="container" id="cnt1">
    <div class="row feature">
        <div class="col-md-6">
            <div>
                <center><img src="profile/akd.png" alt="Texto Alternativo" class="img-responsive"  width="320" height="240"></center>
                <h4>Prof. Alok Kanti Deb</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Electrical Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="http://www.iitkgp.ac.in/fac-profiles/showprofile.php?empcode=bZmVU"><i class="fa fa-link"></i></a>
                            </li>
                        </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div>
                <center><img src="profile/SS.png" alt="Texto Alternativo" class="img-responsive"  width="320" height="240"></center>
                <h4>Prof. Sudeshna Sarkar</h4>
                        <p class="text-muted">Dept. of Computer Science and Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="http://www.iitkgp.ac.in/fac-profiles/showprofile.php?empcode=aZmWS"><i class="fa fa-link"></i></a>
                            </li>
                        </ul>
            </div>
        </div>

    </div>
    <div class="row feature">
    <div class="col-lg-12 text-center">
                    <h2>Advisor	</h2>
            </div>
        <div class="col-md-12">
            <div>
                <center><img src="profile/JM.png" alt="Texto Alternativo" class="img-responsive"  width="320" height="240"></center>
                <h4>Prof. Jayanta Mukhopadhyay</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Computer Science and Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="http://www.iitkgp.ac.in/fac-profiles/showprofile.php?empcode=abmYX"><i class="fa fa-link"></i></a>
                            </li>
                        </ul>
            </div>
        </div>


    </div>
    <div class="row feature">
    <div class="col-lg-12 text-center">
                    <h2> Convenors	</h2>
            </div>
        <div class="col-md-6">
            <div>
                <img src="profile/sanyam.png" alt="Texto Alternativo" class="img-responsive" width="320" height="240">
                <h4>Sanyam Agarwal</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Computer Science and Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=sanyam.agarwal94@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/sanyam.agarwal.75?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=266073885&authType=NAME_SEARCH&authToken=Mj9p&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A266073885%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1440489787146%2Ctas%3Asanyam" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <img src="profile/seemant.png" alt="Texto Alternativo" class="img-responsive"  width="320" height="240">
                <h4>Seemant Jay</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Mechanical Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=seemantjay@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"  target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/seemant.jay?fref=ts" target="_blank"><i class="fa fa-facebook" target="_blank"></i></a>
                            </li>
                            <li><a  target="_blank" href="https://www.linkedin.com/profile/view?id=286563586&authType=NAME_SEARCH&authToken=0ic5&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A286563586%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1440489887704%2Ctas%3Aseemant"><i class="fa fa-linkedin" target="_blank"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
    </div>
    <div class="row feature">
    <div class="col-lg-12 text-center">
    <h2> Core Team Heads	</h2>
            </div>
        <div class="col-md-4">
            <div>
                <img src="profile/agarwalla.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Abhinav Agarwalla</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Mathematics and Computing</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=navabhi174@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"  target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/navabhiagarwalla?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=310454219&authType=NAME_SEARCH&authToken=WopR&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A310454219%2CauthType%3ANAME_SEARCH%2Cidx%3A1-2-2%2CtarId%3A1440490010654%2Ctas%3Aabhinav%20agar"  target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="profile/jd.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Jaideep Singh Chauhan</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Chemical Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=jaideepiit2@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"  target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/jaideepsingh.chauhan.16?fref=ts"  target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=336001292&authType=NAME_SEARCH&authToken=5-Ng&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A336001292%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1440490063079%2Ctas%3Ajaideep%20singh%20cha" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="profile/mantri.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Madhav Mantri</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Biotechnology</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=madman260895@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/mantrimadhav95?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=279604803&authType=NAME_SEARCH&authToken=VEAf&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A279604803%2CauthType%3ANAME_SEARCH%2Cidx%3A1-3-3%2CtarId%3A1440490125034%2Ctas%3Amadhav" target="_blank"><i class="fa fa-linkedin" ></i></a>
                            </li>
                        </ul>
            </div>
        </div>
    </div>
    <div class="row feature">
        <div class="col-md-4">
            <div>
                <img src="profile/abhinav.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Kumar Abhinav</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Chemical Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=abhinaviitkgp1994@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"  target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/kumar.abhinav.146?fref=ts	" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=369263043&authType=NAME_SEARCH&authToken=Vmy8&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A369263043%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1440494464633%2Ctas%3Akumar%20abhinav"  target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="profile/shrey.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Shrey Garg</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Computer Science and Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=shrey91@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"  target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/shrey.garg.10?fref=ts"  target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://in.linkedin.com/pub/shrey-garg/86/76b/905" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="profile/arnav.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Arnav Jain</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Mathematics and Computing</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=arnavkj95@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin" ></i></a>
                            </li>
                        </ul>
            </div>
        </div>
    </div>
    <div class="row feature">
    <div class="col-lg-12 text-center">
                    <h2> Core Team Sub-Heads	</h2>
            </div>
        <div class="col-md-4">
            <div>
                <img src="profile/lohani.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Ankit Lohani</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Chemical Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=lohani.1575@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/ankit.lohani.79?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://in.linkedin.com/pub/ankit-lohani/72/361/b55" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <img src="profile/mondal.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Arnab Mondal</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Electronics and Communication Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=sanu.arnab@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/profile.php?id=100008329938925&fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=359711572&authType=NAME_SEARCH&authToken=XleB&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A359711572%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1440490367409%2Ctas%3Aaarushi" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img src="profile/aarushi.png" alt="Texto Alternativo" class="img-responsive" width="320">
                <h4>Aarushi Agrawal</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Electrical Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=aarushiagrawal1995@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/profile.php?id=100008329938925&fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=359711572&authType=NAME_SEARCH&authToken=XleB&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A359711572%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1440490367409%2Ctas%3Aaarushi" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>

    </div>
    <div class="row feature">
        <div class="col-md-6">
            <div>
                <center><img src="profile/milind.png" alt="Texto Alternativo" class="img-responsive" width="320"></center>
                <h4>Milind Pawar</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Mining Engineering</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=mgpawar.1605@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/milindpawar1605?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=367289407&authType=NAME_SEARCH&authToken=BjMa&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A367289407%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1440490327107%2Ctas%3Amilin" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <center><img src="profile/nishant.png" alt="Texto Alternativo" class="img-responsive" width="320"></center>
                <h4>Nishant Nikhil</h4>
                        <!--<p class="text-muted">Lead Designer</p>-->
                        <p class="text-muted">Dept. of Mathematics and Computing</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=nishantiam@gmail.com&su=CODE-O-SOCCER Query&bcc=ankit.lohani.iitkgp@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/nishnik?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/profile/view?id=68695303&authType=NAME_SEARCH&authToken=_uyk&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A68695303%2CauthType%3ANAME_SEARCH%2Cidx%3A1-6-6%2CtarId%3A1440490492282%2Ctas%3Anishant" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
    </div>

</div>





























            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">

                </div>
            </div>
        </div>
    </section>
<!-- team ends************************************************************************************************************************************************** -->






<section class="container-fluid" id="section6">
    <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="well well-sm">
          <form name="contact_us_form" id="contactusform" method="POST" action="contact_us.php" novalidate="novalidate" onsubmit="return validateText()">
                                          <fieldset>
                                              <legend class="text-center header">Contact us</legend>
                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="usemail" name="usemail" type="text" placeholder="TO : contact-us@krssg.in" class="form-control" readonly>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7"></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-12 text-center">
                                                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                  </div>
                                              </div>
                                          </fieldset>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div>
                                      <div class="panel panel-default">


                                          <div class="text-center header">Our Lab</div>
                                          <div class="panel-body text-center">
                            <div class="grid">
                            <div class = "Grid-cell">
                            KRSSG Lab, Technology Students Gymkhana<br />
                            IIT Kharagpur<br />
                            West Bengal<br />
                            </div>
                            <div>
                              <strong>Contact :</strong><br>
                              Semmant Jay : 8101443644 <br>
                              Sanyam Agarwal : 9002303284<br>
                              Abhinav Agarwalla : 7797436418<br>
                              Ankit Lohani : 9933888782<br>
                            </div>

                            <hr />
                            <div class="Grid-cell" id="map-container">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.9235467484923!2d87.30252999999999!3d22.318730999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1d4407422c1675%3A0xa2d9d15d09ca4c4!2sTechnology+Student+Gymkhana!5e0!3m2!1sen!2sin!4v1433314583855" frameborder="0" style="border:0">
                              </iframe>
                            </div>
                            </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

</section>


<footer id="footer">
    <div class="container">
        <div class="row">
                <ul class="nav">
                    <li><h4><center><a href="https://www.facebook.com/krssg?fref=ts">Facebook</a></center></h4></li>
                </ul>

    </div>
</footer>







<!--****************Login Modal**************************-->
<div class="modal fade" id="login-button" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form name="loginform" id="loginForm" method="POST" action="login.php" novalidate="novalidate" onsubmit="return validateText()">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="teamname" name="teamname" value="" required="" title="Please enter you username" placeholder="Teamname">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>

                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)
                              </div>
                              <button type="submit" class="btn btn-success btn-block" data-loading-text="Submitting...">Login</button>
                             <!-- <button type="button" class="btn btn-failure   btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-button"> Forgot Password </button> -->
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">Code-O-Soccer 2015</span>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Show Your Coding Skills </li>
                          <li><span class="fa fa-check text-success"></span> Compete against people over the Country</li>
                          <li><span class="fa fa-check text-success"></span> First of its kind Coding Competition </li>
                          <li><span class="fa fa-check text-success"></span> Get Certificates and Win Exciting Prizes </li>
                        <!--  <li><a href="/read-more/"><u>Read more</u></a></li> -->
                      </ul>
                      </p>
                      <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#register-button"> Register Here </button>
                  </div>
              </div>
          </div>
      </div>
</div>

<!--****************Login Modal**************************-->


<!--****************register Modal**************************-->
  <div class="modal fade" id="register-button" role="dialog">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
          <div>
            <form name="registration" method="POST" action="register_try.php">
              <div class="form-group">
                <label for="teamname">Teamname</label>
                <input type="text" class="form-control" id="teamname" name="teamname" placeholder="Username(6-11 Characters) ">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password(6-20 Characters)" onfocus="return validateTeamname()">
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re-enter Password" onfocus="return validatePassword()">
              </div>
    <div class="form-group">
                <label for="member1_name">Name (Team Leader)</label>
                <input type="text" class="form-control" id="member1_name" name="member1_name" placeholder="Name ">
              </div>
    <div class="form-group">
                <label for="member1_email">Email Address (Team Leader)</label>
                <input type="text" class="form-control" id="member1_email" name="member1_email" placeholder="Email ">
              </div>
    <div class="form-group">
                <label for="member1_phone">Phone Number (Team Leader)</label>
                <input type="text" class="form-control" id="member1_phone" name="member1_phone" placeholder="Phone Number(10 Digits)">
              </div>
    <div class="form-group">
                <label for="member1_college">College Name (Team Leader)</label>
                <input type="text" class="form-control" id="member1_college" name="member1_college" placeholder="College Name(Maximum 30 Characters)">
              </div>
              <div class="form-group">
                <label for="members">Number of members in your Team</label>
                <select class="form-control" name="quantity"  id="quantity"  onfocus="return validateCPassword()">
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option selected>4</option>
                </select>
              </div>
 <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
<!--               <input type="submit" id="step1" class="btn btn-success btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-next" data-dismiss="modal" value="Next"> -->

            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-failure btn" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-info btn" data-dismiss="modal" data-toggle="modal" data-target="#login-button">Login</button>
      </div>
    </div>
  </div>
</div>
<!--****************register Modal**************************-->













  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }

    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);

  </script>

  <!--scripts loaded here-->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
  /* activate scrollspy menu */
$('body').scrollspy({
  target: '#navbar-collapsible',
  offset: 52
});

/* smooth scrolling sections */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 800);

        if (this.hash=="#section1") {
            $('.scroll-up').hide();
        }
        else {
            $('.scroll-up').show();
        }


        // activte animations in this section
        target.find('.animate').delay(1200).addClass("animated");
        setTimeout(function(){
            target.find('.animated').removeClass("animated");
        },2000);

        return false;
      }
    }
});

  </script>

<!-- ALL SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script >
    var captionLength = 0;
    var caption = "Code-O-Soccer 2015 @ <a href='htp://krssg.in/' target='none'>Kharagpur RoboSoccer Students' Group</a>";
    $(document).ready(function() {
        setInterval ('cursorAnimation()', 200);
        captionEl = $('#caption');
        type();
    });
    function type() {
        captionEl.html(caption.substr(0, captionLength++));
        if(captionLength < caption.length+1) {
            setTimeout('type()', 50);
        } else {
            //setTimeout('erase()', 500);
        }
    }
    function cursorAnimation() {
        $('#cursor').animate({
            opacity: 0
        }, 'fast', 'swing').animate({
            opacity: 1
        }, 'fast', 'swing');
    }
</script>
<script type="text/javascript" src="../src/bootstrap-filestyle.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>
  <script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
  <!-- jQuery (necessary for Bootstrap JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myscript.js"></script>


</body>
</html>