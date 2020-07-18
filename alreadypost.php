<?php

require_once "config.php";
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="pace.css" rel="stylesheet">
  <link href="css/doyourself.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

 
</head>

<body>
  <section id="container">
   
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      
      <a href="donor_dashboard.php" class="logo"><b>Blood<span>Bank</span></b></a>
      
      <div class="nav notify-row" id="top_menu">
       
        <ul class="nav top-menu">
       
         
		</ul>

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    
    <aside>
      <div id="sidebar" class="nav-collapse ">

        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="donor_dashboard.php"><img src="img/download.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h5>
          <li class="mt">
            <a href="donor_dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
       
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Connect Clients</span>
              </a>
            <ul class="sub">
              <li><a href="connectclients.php">connect with clients</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Show Requests</span>
              </a>
            <ul class="sub">
              <li><a href="showrequestdonor.php">show</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Donate Blood</span>
              </a>
            <ul class="sub">
			  <li><a href="drequest.php">Donate</a></li>
            </ul>
          </li>
			
        </ul>

      </div>
    </aside>
   
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3 class="donor_p"><i class="fa fa-angle-right"></i><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.  You Already POST this Request If you want to Post Again Delete Old Request Or Post with diffrent Location Or Blood Group.</h3>
        
      </section>
    </section>
  </section>
  
  <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Blood Bank</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
          Created by Blood Bank System <a href="https://templatemag.com/"></a>
        </div>
        <a href="panels.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>

  <script src="lib/common-scripts.js"></script>

  <script src="lib/sparkline-chart.js"></script>

</body>

</html>
