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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/diaries.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll txtShadow" href="#page-top">
                    <i class="fa fa-beer"></i><span class="light"> Crazy</span> Itenaries
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
        		    <li>
        			    <a href="/auth/register" id="signUpId" class="btn btn-primary btn-lg radius pd12ud mr10"><span class="light network-name">Sign Up</span></a>
                    </li>
        		    <li>
        			    <a href="/auth/login" id="logInId" class="btn btn-lg radius pd12ud"><span class="network-name">Sign in</span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading mt300">Crazy Stories</h1>
                        
			<!--<a href="#stories" class="btn btn-primary btn-lg page-scroll animated radius txtShadow1"> Start Exploring Now </a>-->
                        <b><p class="intro-text text text-default txtShadow">Get on board for some crazy stories inspired from people like you.</p></b>
                        <a href="#stories" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

	
	<div class="">
  <br>
  <div id="stories" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#stories" data-slide-to="0" class="active"></li>
      <li data-target="#stories" data-slide-to="1"></li>
      <li data-target="#stories" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/intro-bg.jpg" alt="Plan" width="100%" height="100%">
        <div class="carousel-caption">
          <h1 class="txtShadow1">Plan</h1>
          <p>Break the monotony, Plan weekends.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/intro-bg.jpg" alt="Create" width="100%" height="100%">
        <div class="carousel-caption">
          <h1 class="txtShadow1">Create</h1>
          <p>Make memories and make followers.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/intro-bg.jpg" alt="Share" width="100%" height="100%">
        <div class="carousel-caption">
          <h1 class="txtShadow"1>Share</h1>
          <p>Meet alike people, share drinks, share stories.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#stories" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#stories" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <!-- Contact Section -->
    <section id="contact" class="container text-center mt100">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Follow us & other crazy people like <br/><br/><span class="label label-danger">you</span></h2>
                <p>You can give feedback, follow us or follow other crazy people on our social networks.</p>
                <p><a href="mailto:feedback@startbootstrap.com" class="label label-default">feedback@drunkdiaries.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Drunken-Diaries-1662222597400561" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>                        
                    </li>
                    <li>
                        <a href="https://plus.google.com/" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>



    <!-- Map Section -->
    <!--<div id="map"></div>-->

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; DrunkenDiaries.com 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/diaries.js"></script>
    <script src="js/main.js"></script>

</body>

</html>