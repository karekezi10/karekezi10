<html>

<head>
    <title>Tanga Amaraso- @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            background-color: #9C27B0;
            color: white;
            text-align: center;




            
        }
        .table{
            width:90%;
            size: 10px;
 

}

    </style>

</head>

<body class="btn-danger">
    @section('sidebar')

    @show

    <div class="container " style="margin-left:21%;
    margin-top:8%; width:890px;  height:90%;">
        @yield('content')
    </div>
    
</body>

</html>