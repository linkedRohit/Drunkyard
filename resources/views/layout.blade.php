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
    @yield('headScript')

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
                <a class="navbar-brand menuHeadTxt" href="/home"><i class="fa fa-beer"></i>Drunk<span class="light">yard</span></a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menuTxt" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/home"><span class="fa fa-magic"></span> Explore</a></li>
                    <li><a href="/create"><span class="fa fa-file-text-o"></span> Create Story</a></li>
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
                    <!--<li><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xat1/v/t1.0-1/c0.0.160.160/p160x160/12189526_1251290068229909_3470597878457429434_n.jpg?oh=4278111dc837caae7c51a806c3eadd53&oe=571F0EBE&__gda__=1460609962_caad221000552dc45a80bafcc079b3c3" class="image_thumb" height="23px" width="23px"></li>                        -->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Rohit <b class="caret"></b></a>
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

     <footer class="mt100">
    <!-- Contact Section -->
    <section id="contact" class="container text-center greyText">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Follow us & other crazy people like <br/><br/><span class="label label-danger">you</span></h2>
                <p>You can give feedback, follow us or follow other crazy people on our social networks.</p>
                <br />
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/" class="btn btn-site btn-lg twt"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Drunken-Diaries-1662222597400561" class="btn btn-site btn-lg fbk"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>                        
                    </li>
                    <li>
                        <a href="https://plus.google.com/" class="btn btn-site btn-lg gog"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="container text-center greyText">
            <p><a href="mailto:feedback@startbootstrap.com" class="label label-default">feedback@drunkdiaries.com</a>
                </p> <br/>
            <p>Copyright &copy; DrunkenDiaries.com 2015</p>
        </div>
        <div class="lbbordr2px mt50">
                                    <a href="" class="footerAnchor">About us</a>
                                    <a href="" class="footerAnchor">FAQs</a>
                                    <a href="" class="footerAnchor">Contact us</a>
                                    <a href="" class="footerAnchor">Feedback</a>
                                    <a href="" class="footerAnchor">Careers </a>
                                    <a href="" class="footerAnchor">Privacy </a>
                                    <a href="" class="footerAnchor">Terms </a>
                                </div>
    </section>
    </footer>



    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/js/diaries.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>


</body>

</html>