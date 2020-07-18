<?php
//error_reporting( error_reporting() & ~E_NOTICE );
require_once "config.php";
session_start();
$t1=$_GET['p2']; // cid
$t2=$_GET['p1']; //rid
$t3=$_GET['a']; //did
$t4=$_GET['n']; //donorname
//echo "CID : $t1";
//echo "RID : $t2";
//echo "DID : $t3";
//echo "Donor Name : $t4";
$p1=$t1;
$chat="";
$chat_err="";
$c="";
$G="No Message Till Yet";
// avoid duplicate
//$sqlo = "SELECT chat_id FROM msg WHERE did_fk=$t3 and cid_fk=$t1 and rid_fk=$t2";
//$stmto = mysqli_query($connect, $sqlo);
//$cnt= mysqli_num_rows ( $stmto );
//
//if($cnt==0){
    if(isset($_POST['chat'])){
    
        $chat = $_POST["chat"];
        $cs=0;
       // $t1= $_POST["t1"];
           
            
$sqlc="INSERT INTO msg( did_fk, cid_fk, rid_fk, chat, cs) VALUES ($t3,$t1,$t2,?,?)";
if($stmtc=mysqli_prepare($connect,$sqlc)){
    mysqli_stmt_bind_param($stmtc, "si", $chat,$cs);
      if(mysqli_stmt_execute($stmtc)==true){ header("location: client_dashboard.php");}
    }   
//} 
}
$sqld="SELECT cs , chat , date  FROM msg WHERE did_fk=$t3 and cid_fk=$t1 and rid_fk=$t2";
 $stmtd=mysqli_query($connect,$sqld);

/*$sql="SELECT chat FROM msg WHERE rid_fk=$t2";
$stmt = mysqli_prepare($connect, $sql);
//$stmt->bind_param('i',$rid_fk);
$stmt->execute();

$stmt->bind_result($chat);
//$sql->execute();
while($stmt->fetch())
{
   $G=$chat; // $password and $salt contain the values you're looking for
}
 */  
  
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
  <link href="pace.css" rel="stylesheet">
  <link href="styling.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

 
</head>

<body>
  <section id="container">
   
    <header class="header black-bg">
		
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      
      <a href="client_dashboard.php" class="logo"><b>Blood<span>Bank</span></b></a>
      <div class="nav notify-row" id="top_menu">
        
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
			
          <p class="centered"><a href="client_dashboard.php"><img src="img/download.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h5>
          
		  <li class="mt">
            <a href="client_dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
			
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Search Blood</span>
              </a>
            <ul class="sub">
             <li><a href="searchblood.php">search</a></li>
            </ul>
          </li>
			
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>See Connected Connections</span>
              </a>
            <ul class="sub">
             <li><a href="client_connected_connection.php">connections</a></li>
            </ul>
          </li>
			
        </ul>
      </div>
		
    </aside>
    
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3 class="donor_p"><i class="fa fa-angle-right"></i>Chat Room</h3>
        	<div class="mobileshape">
				
			  <div class="upside">
				<div class="cutler">
					<img src="images/baba.png">
				</div>
			  
				<div class="title">
					<p>Chat to donor</p>
			    </div>
			  </div>
              
              <form action="" method="post">
                
				<div class="chat">  
					
				<?php   while (($row = $stmtd->fetch_assoc()) != NULL) { ?>
            
            		<?php   if ($row['cs']==0){   ?>
					
                    	<div class="container-chat1">
                    		<p id="p1"><?php echo $row['chat'];  
                    			echo "&nbsp&nbsp&nbsp&nbsp";echo $row['date'];
                    			?></p>
                    	</div>

                    <?php } ?>

                    <?php   if ($row['cs']==1){   ?>
					
                    	<div class="container-chat2 darker">
                    		<p id="p2"><?php echo $row['chat'];  
                    			echo "&nbsp&nbsp&nbsp&nbsp"; echo $row['date'];
                    			?></p>
                    	</div>

                    <?php } ?>
         
            	<?php } ?>
				
				</div>
			
			<div class="chatting">	  
			
			<div class="send"> 
        		<button type="submit" class="btn btn-primary" > Send</button>
            </div>	
				
            <div class="form-group <?php echo (!empty($chat_err)) ? 'has-error' : ''; ?>">
                <input class="write" type="text" name="chat" class="form-control" value="<?php echo $chat; ?>" placeholder="Enter your message">
                <span class="help-block"><?php echo $chat_err; ?></span>
            </div>
				  
            <div class="form-group <?php echo (!empty($chat_err)) ? 'has-error' : ''; ?>">
                <input type="hidden" name="t2" class="form-control" value="<?php echo $t2; ?>">
                <span class="help-block"><?php echo $chat_err; ?></span>
			</div>
				 
		    </div>
				  
            </form>
            
        </div>
	  </section>
    </section>
	
	
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">

          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="chat_room.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>

  </section>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>

  <script src="lib/common-scripts.js"></script>

</body>

</html>

