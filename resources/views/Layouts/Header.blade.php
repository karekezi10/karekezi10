


<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../css/metisMenu.min.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="../css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/startmin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="../css/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>

<nav class="navbar-inverse  navbar-fixed-top bg-danger"  style="color:white;" role="navigation">


        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">BloodBanK Management System</a>
        </div>

        

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> BBMS</a></li>
        </ul>

<!-- /.notification Icon-->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>



                
            </li>
            <!-- /.notification Icon-->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> BloodBanbk<b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="index"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default btn-danger sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse bg-danger">
                <ul class="nav" id="side-menu bg-danger">

<!-- /.-Search -->

                    <li class="sidebar-search bg-danger">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                  
                    <li class="bg-danger">
                        <a href="#" class="active "><i class="fa fa-dashboard fa-fw text-danger">Dashboard</i> </a>
                    </li>
                    <li>
                    <a  href="#"><i class="fa fa-home text-danger">Home </i></a> 
                        <ul class="nav nav-second-level">
                            <li>
                            
                <a  href="{{ route('projects.create') }}" ><i class="fa fa-users text-danger">Add Donor</i>
                    </a>

                            </li>
                            <li>
                                <a href="#"><i class="fa fa-tint text-danger"> Blood Donations</i></a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-th-list text-danger">Request</i> </a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw text-danger"> HandedOver</i></a>
                    </li>
                   
                   
                   
                    <li class="bg-light" style="background-color:white">
                        <a href="#"><i class="fa fa-users fa-w-20 text-danger">Users</i> <span class="fa arrow"></span></a>
                       
                        
                    </li>
                </ul>
            </div>
        </div>

    </nav>

</nav>
     <!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
