<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="We're better than Quickteller people, use us.">
    <meta name="keywords" content="Buy Airtime, Pay Bills">
    <meta name="author" content="EyeCity">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

<link href="/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
	<link href="/assets/css/style.css" rel="stylesheet" />
      <link href="/assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="/assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/admin/profile"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="/admin/settings"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <nav class="navbar-default navbar-static-side" role="navigation" style="background-color: black;">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse" style="background-color: black;">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        
                        <div class="user-section">
                            <!-- <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div> -->
                            <div class="user-info">
                                <div>{{$name}}</div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Admin
                                </div>
                            </div>
                        </div>
                      
                    </li>
                    <li class="sidebar-search">
                     
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        
                    </li>
                    
                  
                    <li>
                        <a href="bulk-uploads.html"><i class="fa fa-edit fa-fw"></i>Bulk Uploads</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Services<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/cats">Categories</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/services">All Services</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="vendors.html"><i class="fa fa-table fa-fw"></i>Vendors</a>
                    </li>

                    <li>
                        <a href="users.html"><i class="fa fa-table fa-fw"></i>Users</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="transactions.html">User Transactions</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="transactions.html">Vendor Transactions</a>
                            </li>
                        </ul>
                    </li>

                   
              

                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="col-lg-12">
                    <h1 class="page-header">{{$page}}</h1>
                </div>
            @yield('content')
        </div>
       
       
       <div class="footer">
           footer
       </div>
    </div>

    <script src="/assets/plugins/jquery-1.10.2.js"></script>
    <script src="/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/assets/plugins/pace/pace.js"></script>
    <script src="/assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="/assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    
</body>
</html>
