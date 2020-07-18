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
  <link href="lib/fancybox/jquery.fancybox.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/jquery/jquery.min.js"></script>

</head>

<body>
  <section id="container">
  
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <a href="Home.php" class="logo"><b>Blood<span>Bank</span></b></a>

      <div class="nav notify-row" id="top_menu">
  
        <ul class="nav top-menu">
      
        </ul>

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="checklogin.php">Login</a></li>
		  <li><a class="logout" href="checksignin.php">Signup</a></li>
        </ul>
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
		   <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Home</span>
              </a>
            <ul class="sub">
              <li><a href="Home.php">Home</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Website Creaters</span>
              </a>
            <ul class="sub">
              <li><a href="creaters.php">creaters</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>gallery</span>
              </a>
            <ul class="sub">
              <li><a href="gall.php">gallery</a></li>
            </ul>
          </li>
         
        </ul>
      
      </div>
    </aside>

    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i>Creaters</h3>
        <hr>
        <div class="row mt">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
<!--                    <a class="fancybox" href="whatsapp/WhatsApp%20Image%202019-11-27%20at%2006.41.19%20(1).jpeg"><img class="img-responsive" src="whatsapp/WhatsApp%20Image%202019-11-27%20at%2006.41.19%20(1).jpeg" alt=""></a>-->
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div class="photo">
<!--                    <a class="fancybox" href="whatsapp/WhatsApp%20Image%202019-11-27%20at%2006.41.19%20(2).jpeg"><img class="img-responsive" src="whatsapp/WhatsApp%20Image%202019-11-27%20at%2006.41.19%20(2).jpeg" alt=""></a>-->
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- col-lg-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
              <div class="project">
                <div class="photo-wrapper">
                  <div style="height:600px;" class="photo">
<!--                    <a class="fancybox" href="whatsapp/WhatsApp%20Image%202019-11-27%20at%2006.41.19.jpeg"><img class="img-responsive" src="whatsapp/WhatsApp%20Image%202019-11-27%20at%2006.41.19.jpeg" alt=""></a>-->
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
            </div>
          </div>
 
        </div>
 
      </section>

    </section>

    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Blood Bank</strong>. All Rights Reserved
        </p>
        <div class="credits">
         
          Created by <a href="Home.php">Blood Bank</a>
        </div>
        <a href="gallery.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>

  </section>

  <script src="lib/fancybox/jquery.fancybox.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>

  <script src="lib/common-scripts.js"></script>

  <script type="text/javascript">
    $(function() {

      jQuery(".fancybox").fancybox();
    });
  </script>

</body>

</html>
