<?php
	ob_start();
	session_start();
	require('connect.php');


	
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Welcome
            <?php echo "$userRow[firstname]"; ?>
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/js/chart-master/Chart.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/style-responsive.css" rel="stylesheet">
        <link href="../assets/css/table-responsive.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">
        <!-- Custom styles for this template -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/style-responsive.css" rel="stylesheet"> </head>

    <body>
        <section id="container">
            <header class="header black-bg">
                <!--logo start--><a href="../index.html" class="logo"><b>BAGUIO CAR RENTAL</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- inbox dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="logout.php">Logout</a> </li>
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered">
                            <a href="../index.php"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
                        </p>
                        <h5 class="centered">ADMIN</h5>
                        <li class="sub-menu">
                            <a href="../adminAccountMonitoring/index.php"> <i class="fa fa-cogs"></i> <span>Client Account Monitoring</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../clientRequests/home.php"> <i class="fa fa-cogs"></i> <span>Client Request</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../seviceProvidersAccountMonitoring/index.php"> <i class="fa fa-cogs"></i> <span>Service Provider Account Monitoring</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../seviceProvidersRequests/home.php"> <i class="fa fa-cogs"></i> <span>Service Provider Account Request</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../adminAccountMonitoring/index.php"> <i class="fa fa-cogs"></i> <span>Admin Account Monitoring</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../adminRequests/home.php"> <i class="fa fa-cogs"></i> <span>Admin  Account Request</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../car/index.php"> <i class="fa fa-cogs"></i> <span>Car Management</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../rent/index.php"> <i class="fa fa-cogs"></i> <span>Rent Management</span> </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="content-panel">
                                <h4><i class="fa fa-angle-right"></i> </h4>
                                <section id="unseen">
                                    <br />
                                    <div class="container">
                                        <div class="page-header">
                                            <br>
                                            <h2><center><b>Approval of Request</b></center></h2> </div>
                                        <?php
        $sql = mysqli_query($conn,"SELECT * from admin WHERE request='Pending'");
        
        if($sql->num_rows > '0'){
            
			echo "<table class='table table-striped table-bordered table-hover id='dataTables-example';>";
 			
			echo "
			
                
            <tr>
				<td>ID</td>
				<td>Firstname</td>
				<td>Lastname</td>
                <td>Email</td>
                <td>Password</td>
                <td>Contact Number</td>
				<td>Address</td>
                <td>Role</td>
				<td>Request</td>
				<td>approval</td>
			</tr>
				";
            
            while($row = mysqli_fetch_assoc($sql)){
                	$id_no =$row['id_no'];
					$firstName=$row['firstName'];
					$lastName=$row['lastName'];
                    $email=$row['email'];  
                    $password  =$row['password'];
                    $contactNumber=$row['contactNumber'];
                    $address=$row['address'];
                    $role=$row['role'];
                    $request=$row['request'];
                
                
                echo"
                <tr>
                
                    <td>$id_no</td>
                    <td>$firstName</td>
                    <td>$lastName </td>
					<td>$email</td>
					<td>$password</td>
                    <td>$contactNumber</td>
                    <td>$address</td>
					<td>$role</td>	
					<td>$request</td>
                    <td><form action='changeStatus.php' method='POST'>
                    <button class='btn-primary' value='$id_no,approved' name='approve'>Approved</button>
                    <button class='btn-danger' value='$id_no,blocked' name='block'>Block</button>
                    </form>
                    </td>
                    
                </tr>    
                
                
                
                
                ";
            }
        }
?>
                                    </div>
                                </section>
                                <script src="assets/jquery-1.11.3-jquery.min.js"></script>
                                <script src="assets/js/bootstrap.min.js"></script>
                                <!--footer end-->
                                <!-- js placed at the end of the document so the pages load faster -->
                                <script src="../assets/js/jquery.js"></script>
                                <script src="../assets/js/jquery-1.8.3.min.js"></script>
                                <script src="../assets/js/bootstrap.min.js"></script>
                                <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
                                <script src="../assets/js/jquery.scrollTo.min.js"></script>
                                <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
                                <script src="../assets/js/jquery.sparkline.js"></script>
                                <!--common scripta for all pages-->
                                <script src="../assets/js/common-scripts.js"></script>
                                <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
                                <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>
                                <!--script for this page-->
                                <script src="../assets/js/sparkline-chart.js"></script>
                                <script src="../assets/js/zabuto_calendar.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        var unique_id = $.gritter.add({
                                            // (string | mandatory) the heading of the notification
                                            title: 'Welcome ADMIN!', // (string | mandatory) the text inside the notification
                                            image: 'img/ui-sam.jpg', // (bool | optional) if you want it to fade out on its own or just sit there
                                            sticky: true, // (int | optional) the time you want it to be alive for before fading out
                                            time: '', // (string | optional) the class name you want to apply to that specific message
                                            class_name: 'my-sticky-class'
                                        });
                                        return false;
                                    });
                                </script>
                                <script type="application/javascript">
                                    $(document).ready(function () {
                                        $("#date-popover").popover({
                                            html: true
                                            , trigger: "manual"
                                        });
                                        $("#date-popover").hide();
                                        $("#date-popover").click(function (e) {
                                            $(this).hide();
                                        });
                                        $("#my-calendar").zabuto_calendar({
                                            action: function () {
                                                return myDateFunction(this.id, false);
                                            }
                                            , action_nav: function () {
                                                return myNavFunction(this.id);
                                            }
                                            , ajax: {
                                                url: "show_data.php?action=1"
                                                , modal: true
                                            }
                                            , legend: [
                                                {
                                                    type: "text"
                                                    , label: "Special event"
                                                    , badge: "00"
                        }
                        , {
                                                    type: "block"
                                                    , label: "Regular event"
                                                , }
                ]
                                        });
                                    });

                                    function myNavFunction(id) {
                                        $("#date-popover").hide();
                                        var nav = $("#" + id).data("navigation");
                                        var to = $("#" + id).data("to");
                                        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </body>

    </html>