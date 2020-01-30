<!DOCTYPE html>
<html lang="sr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Дом здравља</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <style>
    	.navbar-default {
    		background: transparent;
    		border: none !important;
    	}
    </style>

    <script type="text/javascript">
    	$(document).ready(function() {
    		$(window).on("scroll", function() {
    			var wn = $(window).scrollTop();
    			if(wn > 350) {
    				$(".navbar-default").css("background", "rgba(200,200,200,0.7)");
    			}
    			else {
    				$(".navbar-default").css("background", "rgba(0,0,0,0.0)");
    			}
    		});
    	});    		
    </script>
    	

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom"> 
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="dropdown">
                    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">За пацијенте<span class="caret"></span></a>
                    		<ul class="dropdown-menu" style="background-color: lightgray">
                    			<li><a href="izabranilekar.php"><b>Изабрани лекар</b></a></li>
                    			<li><a href="radnovreme.php"><b>Радно време лекара</b></a></li>
                    		</ul>
                    	<!--<a href="#zapacijente">За пацијенте</a>-->                    	
                    </li>
                    <li class="page-scroll">
                    	<a href="kalendar.php">Календар здравља</a>
                    </li>
                    <li class="page-scroll">
                    	<a href="loginform.php">Пријава</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
    <div id="myCarousel" class="carousel slide"; data-ride="carousel" style="background-color: white;">
    <div class="carousel-inner">
    	<div class="item active">
    		<img class="img-responsive" src="img/health_on_the_net.jpg" alt="" style="filter: brightness(70%); width: 100%; height: 100%;">
    	</div>
    	<div class="item">
    		<img class="img-responsive" src="img/slika2.jpg" alt="" style="filter: brightness(70%); width: 100%; height: 100%;">
    	</div>
    	<div class="item">
    		<img class="img-responsive" src="img/slika3.jpg" alt="" style="filter: brightness(70%); width: 100%; height: 100%;">
    	</div>
        <!--<div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        <h1 class="name">Start Bootstrap</h1>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>-->
        </div>
        </div>
    </header>

    <div class="container">
    <section>
    <div class="col-lg-12">
        <h4 style="text-align: center;"><a href="http://www.rfzo.rs/index.php/osiguranalica/provera-izabranog-lekara" target="_blank">Провера изабраног лекара</a></h4>
    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ultricies ex id sodales. Suspendisse semper risus quis lorem dignissim viverra. Morbi sed maximus erat, eget commodo augue. Mauris rhoncus odio ac ligula pharetra semper. Aliquam tempor lectus sed enim euismod consequat. Nulla eu dolor congue, ornare eros quis, rutrum urna. Sed posuere nec erat in lacinia.

Maecenas placerat blandit ante, eget iaculis quam pellentesque et. Sed venenatis ornare justo, a facilisis metus tempor ac. Mauris iaculis vitae leo ut posuere. Quisque arcu ligula, feugiat vel nisl sit amet, imperdiet faucibus magna. Curabitur sit amet nisi dictum, blandit arcu at, semper nibh. Suspendisse urna nulla, condimentum id dapibus cursus, porttitor et risus. Quisque diam elit, vulputate blandit augue nec, viverra placerat risus. Aliquam vehicula tortor nisi, sed gravida tellus lacinia nec. Praesent vel luctus sapien, et vehicula eros. Vestibulum pellentesque placerat malesuada. Aenean ac nulla sem. Nulla ac leo erat. Suspendisse non vulputate nunc. Ut sed tellus sit amet quam iaculis euismod vel at est. Quisque pulvinar purus est, vel sagittis arcu convallis vel. Quisque quis dui leo.

Nunc blandit purus sed sagittis vestibulum. Vestibulum sit amet arcu sapien. Donec lacinia pharetra tortor quis iaculis. Curabitur ultrices est id quam viverra, ac consectetur mauris ultricies. Proin sit amet turpis ipsum. Nullam eu feugiat purus. Duis porttitor magna neque, eget vehicula lectus mollis non. Praesent sollicitudin, risus at posuere facilisis, nisl nulla pellentesque odio, et imperdiet risus lacus vel velit. Integer ex justo, commodo vitae tempor nec, imperdiet eu nisl. Etiam iaculis, libero ac tincidunt aliquet, arcu risus vulputate urna, vel lacinia purus leo vitae urna. Suspendisse id euismod lacus, vitae feugiat nunc.

Aenean sodales nunc id ante auctor faucibus. Sed sed blandit nibh, at feugiat augue. Nullam tincidunt nisi in massa scelerisque, nec tempus nibh luctus. In eu quam nibh. Fusce mattis dui vitae mattis lacinia. Quisque tempus sit amet neque nec interdum. Praesent bibendum massa augue, sit amet pharetra lorem convallis et. In congue est quis odio tempor finibus. Donec aliquet neque turpis, eget aliquam augue congue eget. Ut eu tincidunt ante, eget lobortis dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent quis faucibus diam.

Mauris id velit erat. Pellentesque quis sodales tortor, eu pretium tortor. Ut sagittis magna nec felis blandit, sit amet faucibus massa cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla laoreet nulla ac arcu fringilla, tempus accumsan neque sollicitudin. Curabitur tincidunt, eros sit amet condimentum semper, neque risus pellentesque ipsum, at tempus velit felis nec dui. Morbi mollis lacinia purus, vitae euismod justo porta vel. Mauris risus ipsum, auctor quis auctor quis, pharetra sit amet nunc. Ut venenatis porta enim ac finibus. Praesent diam felis, placerat eget est vitae, tincidunt bibendum libero.</p>
</div>
</section>
</div>

        <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Адреса</h3>
                        <p>Светог Саве 19а
                            <br>37210 Ћићевац
                            <br>Република Србија</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Контакт</h3>
                        <p>Телефон: 037 811 111
                        <br>Имејл: mail@mail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Дом здравља 2017.
                    </div>
                </div>
            </div>
        </div>
    </footer>


        <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>