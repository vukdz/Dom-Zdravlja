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

    <style>
    	.navbar-default {
    		background: transparent;
    		border: none !important;
    	}

        th {
            text-align: center;
            background-color: lightgray;
        }
    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

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
                    	<a href="#kalendar">Календар здравља</a>
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
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Календар здраља</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Јануар</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25-31. јануар</td>
                            <td>Европска недеља превенције рака грлића материце</td>
                        </tr>
                        <tr>
                            <td>31. јануар</td>
                            <td>Национални дан без дуванског дима</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Фебруар</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4. фебруар</td>
                            <td>Светски дан борбе против рака</td>
                        </tr>
                        <tr>
                            <td>15. фебруар</td>
                            <td>Међународни дан деце оболеле од рака</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Март</th>
                            <th>Месец борбе против рака</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td>Други четвртак у месецу</td>
                           <td>Светски дан бубрега</td> 
                        </tr>
                        <tr>
                            <td>22. март</td>
                            <td>Светски дан вода</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Април</th>     
                            <th></th>               
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <td>7. април</td>
                            <td>Светски дан здравља</td>
                        </tr>
                        <tr>
                            <td>22. април</td>
                            <td>Дан планете Земље</td>
                        </tr>
                        <tr>
                            <td>Трећа недеља априла</td>
                            <td>Европска недеља имунизације</td>
                        </tr>
                        <tr>
                            <td>Четврта недеља априла</td>
                            <td>Недеља превенције повреда у саобраћају</td>
                        </tr>                        
                    </tbody>
                    <thead>
                        <tr>
                            <th>Мај</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <td>5. мај</td>
                            <td>Међународни дан бабица</td>
                        </tr>
                        <tr>
                            <td>10. мај</td>
                            <td>Међународни дан физичке активности</td>
                        </tr>
                        <tr>
                            <td>11. мај</td>
                            <td>Национални дан добровољних давалаца крви</td>
                        </tr>
                        <tr>
                            <td>12. мај</td>
                            <td>Међународни дан сестринства</td>
                        </tr>
                        <tr>
                            <td>15. мај</td>
                            <td>Међународни дан породице</td>
                        </tr>
                        <tr>
                            <td>20. мај</td>
                            <td>Дан здравих градова</td>
                        </tr>
                        <tr>
                            <td>22. мај</td>
                            <td>Међународни дан биолошке разноврсности</td>
                        </tr>
                        <tr>
                            <td>31. мај</td>
                            <td>Светски дан без дуванског дима</td>
                        </tr>
                        <tr>
                            <td>Трећа недеља (дан) у мају</td>
                            <td>Дан сећања на преминуле од сиде</td>
                        </tr>
                        <tr>
                            <td>Трећа недеља маја</td>
                            <td>Национална недеља здравља уста и зуба</td>
                        </tr>
                    </tbody> 
                    <thead>
                        <tr>
                            <th>Јун</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5. јун</td>
                            <td>Светски дан човекове околине</td>
                        </tr>
                        <tr>
                            <td>14. јун</td>
                            <td>Светски дан добровољних давалаца крви</td>
                        </tr>
                        <tr>
                            <td>26. јун</td>
                            <td>Међународни дан против злоупотребе и кријумчарења дроге</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Јул</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>11. јул</td>
                            <td>Светски дан становништва</td>
                        </tr>
                        <tr>
                            <td>28. јул</td>
                            <td>Светски дан борбе против хепатитиса</td>
                        </tr>
                    </tbody> 
                    <thead>
                        <tr>
                            <th>Август</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Прва недеља августа</td>
                            <td>Светска недеља дојења</td>
                        </tr>
                        <tr>
                            <td>12. август</td>
                            <td>Међународни дан младих</td>
                        </tr>
                    </tbody>  
                    <thead>
                        <tr>
                            <th>Септембар</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <td>10. септембар</td>
                            <td>Светски дан превенције самоубистава</td>
                        </tr>
                        <tr>
                            <td>11. септембар</td>
                            <td>Светски дан прве помоћи</td>
                        </tr>
                        <tr>
                            <td>29. септембар</td>
                            <td>Светски дан срца (недеља у трећој недељи септембра)</td>
                        </tr>
                        <tr>
                            <td>Четрдесета недеља у години</td>
                            <td>Национална недеља промоције дојења</td>
                        </tr>
                    </tbody> 
                    <thead>
                        <tr>
                            <th>Октобар</th>
                            <th>Месец правилне исхране</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. октобар</td>
                            <td>Међународни дан старих</td>
                        </tr>
                        <tr>
                            <td>10. октобар</td>
                            <td>Светски дан менталног здравља</td>
                        </tr>
                        <tr>
                            <td>15. октобар</td>
                            <td>Светски дан чистих руку</td>
                        </tr>
                        <tr>
                            <td>16. октобар</td>
                            <td>Светски дан хране</td>
                        </tr>
                        <tr>
                            <td>17. октобар</td>
                            <td>Међународни дан борбе против сиромаштва</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Новембар</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <td>14. новембар</td>
                            <td>Светски дан борбе против шећерне болести</td>
                        </tr>
                        <tr>
                            <td>15. новембар</td>
                            <td>Међународни дан борбе против опструктивне болести плућа</td>
                        </tr>
                        <tr>
                            <td>18. новембар</td>
                            <td>Европски дан рационалне употребе антибиотика</td>
                        </tr>
                        <tr>
                            <td>20. новембар</td>
                            <td>Међународни дан детета</td>
                        </tr>
                        <tr>
                            <td>Трећа недеља (дан) у новембру</td>
                            <td>Светски дан сећања на жртве саобраћајних незгода</td>
                        </tr>
                    </tbody> 
                    <thead>
                        <tr>
                            <th>Децембар</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. децембар</td>
                            <td>Светски дан борбе против ХИВ/АИДС-а</td>
                        </tr>
                        <tr>
                            <td>3. децембар</td>
                            <td>Међународни дан особа са инвалидитетом</td>
                        </tr>
                    </tbody>             
                </table>
            </div>
        </div>
    </div>
    <!-- Footer -->
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