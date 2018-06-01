<?php
//index.php
include("db.php");

?>
    <!DOCTYPE html>
    <html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="assets/js/chart-master/Chart.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="../BaguioCarRental/assets/assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="../BaguioCarRental/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="../BaguioCarRental/assets/css/style.css" rel="stylesheet">
        <link href="../BaguioCarRental/assets/css/style-responsive.css" rel="stylesheet">
        <link href="../BaguioCarRental/a../BaguioCarRentalssets/css/table-responsive.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="../BaguioCarRental/assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="../BaguioCarRental/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">
        <!-- Custom styles for this template -->
        <link href="../BaguioCarRentalassets/css/style.css" rel="stylesheet">
        <link href="../BaguioCarRental/assets/css/style-responsive.css" rel="stylesheet"> </head>

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
            <!--header end-->
            <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered">
                            <a href="../BaguioCarRental/index.php"><img src="../BaguioCarRental/assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
                        </p>
                        <h5 class="centered">ADMIN</h5>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/clientsAccountMonitoring/index.php"> <i class="fa fa-cogs"></i> <span>Client Account Monitoring</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/clientRequests/home.php"> <i class="fa fa-cogs"></i> <span>Client Request</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/seviceProvidersAccountMonitoring/index.php"> <i class="fa fa-cogs"></i> <span>Service Provider Account Monitoring</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/seviceProvidersRequests/home.php"> <i class="fa fa-cogs"></i> <span>Service Provider Account Request</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/adminAccountMonitoring/index.php"> <i class="fa fa-cogs"></i> <span>Admin Account Monitoring</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/adminRequests/home.php"> <i class="fa fa-cogs"></i> <span>Admin Account Request</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/car/index.php"> <i class="fa fa-cogs"></i> <span>Car Management</span> </a>
                        </li>
                        <li class="sub-menu">
                            <a href="../BaguioCarRental/rent/index.php"> <i class="fa fa-cogs"></i> <span>Rent Management</span> </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
        </section>
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">ADMIN
                <a href="../BaguioCarRental/index.html" class="go-top"> <i class="fa fa-angle-up"></i> </a>
            </div>
        </footer>
        <!--footer end-->
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../BaguioCarRental/assets/js/jquery.js"></script>
        <script src="../BaguioCarRentalassets/js/jquery-1.8.3.min.js"></script>
        <script src="../BaguioCarRentalassets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../BaguioCarRentalassets/js/jquery.scrollTo.min.js"></script>
        <script src="../BaguioCarRentalassets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../BaguioCarRentalassets/js/jquery.sparkline.js"></script>
        <!--common scripta for all pages-->
        <script src="../BaguioCarRental/assets/js/common-scripts.js"></script>
        <script type="text/javascript" src="../BaguioCarRentalassets/js/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="../BaguioCarRentalassets/js/gritter-conf.js"></script>
        <!--script for this page-->
        <script src="../BaguioCarRentalassets/js/sparkline-chart.js"></script>
        <script src="../BaguioCarRentalassets/js/zabuto_calendar.js"></script>
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
    </body>

    </html>