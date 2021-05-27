<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../css/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/startmin.css" rel="stylesheet">

<!-- Morris Charts CSS -->

<link href="../css/boxicons.css" rel="stylesheet">
<link href="../css/boxicons.min.css" rel="stylesheet">
<link href="../css/animations.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!-- Bootstrap -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
    integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
</script>
</head>
<body>

<nav class="navbar-inverse  navbar-fixed-top "  style="color:white;" role="navigation">


        <div class="navbar-header">
            <a class="navbar-brand" href="index.html" style=color:#fff;> BloodBanK Management System</a>
        </div>

        

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw" style=color:#fff;></i> BBMS</a></li>
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
                    <i class="fa fa-user fa-fw" style=color:#fff;></i> Administration<b class="caret"></b>
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

        <div class="navbar-default btn-danger sidebar" role="navigation"style="top:40%;" >
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
                    <a  href="#"><i class="fa fa-home fa-fw  text-danger"></i>Home </a> 
                        <ul class="nav nav-second-level">
                            <li>
                            
                <a  href="{{ route('projects.create') }}" ><i class="fa fa-users text-danger"> </i>Add Donor
                    </a>

                            </li>
                            <li>
                                <a href="#"><i class="fa fa-tint text-danger"> </i>Blood Donations</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-th-list text-danger"></i>Request </a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw text-danger"> </i>HandedOver</a>
                    </li>
                   
                   
                   
                    <li class="bg-light" style="background-color:white">
                        <a href="#"><i class="fa fa-users fa-w-20 text-danger"></i>Users <span class="fa arrow"></span></a>
                       
                        
                    </li>
                </ul>
            </div>
        </div>

    </nav>

</nav>
  
