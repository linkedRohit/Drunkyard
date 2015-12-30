<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Drunken Diaries</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('/css/diaries.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="" rel="stylesheet" >

    @yield('css')

	<!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <!-- Internet explorer support -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class='error-box' style='display:none'></div>

   
    <div class="drunkyard-navigation">
    <nav id="dyNavbar" class="navbar navbar-custom navbar-fixed-top navbar-loggedIn" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color: rgba(0, 0, 0, 0.1);">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color: #fff;"></span>
                    <span class="icon-bar" style="background-color: #fff;"></span>
                    <span class="icon-bar" style="background-color: #fff;"></span>
                </button>
                <a class="navbar-brand menuHeadTxt" href="#"><i class="fa fa-beer"></i>Drunk<span class="light">yard</span></a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menuTxt" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/home"><span class="fa fa-magic"></span> Explore</a></li>
                    <li><a href="/story/create/11422"><span class="fa fa-file-text-o"></span> Create Story</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="fa fa-list"></span> Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="menuListItem"><a href="#">Parties</a></li>
                            <li class="menuListItem"><a href="#">Farm Houses</a></li>
                            <li class="menuListItem"><a href="#">House Parties</a></li>
                            <li class="divider"></li>
                            <li class="menuListItem"><a href="#">Car Parties</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="fa fa-bank"></span> My yard</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="fa fa-inbox"></span> </a></li>
                    <li><a href="#"><span class="fa fa-bell-o"></span> </a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="fa fa-user"></span> Rohit Sharma <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="menuListItem"><a href="#"><span class="fa fa-gears"></span> My Profile</a></li>
                            <li class="menuListItem"><a href="#"><span class="fa fa-lock"></span> Change Password</a></li>
                            <li class="divider"></li>
                            <li class="menuListItem"><a href="/auth/logout" id="logOutId"><span class="network-name"><span class="fa fa-sign-out"></span> Logout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>

	@yield('content')


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/js/diaries.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>

    @yield('script')

</body>

</html>