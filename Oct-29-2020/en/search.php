<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SAELINK LAW 世宁律师事务所</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <link href="vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

		
<?php include("owa.php"); ?>
		
		<?php include("db.php"); ?>


		
		
		
		
        <!--================Search Area =================-->
<?php include("search-html.php"); ?>

        <!--================End Search Area =================-->
		
		
		<?php 
			
			$KEYWORD = $_POST["KEYWORD"];
			if (strlen($KEYWORD)<3)
				$KEYWORD = $_GET["keyword"];
		
		
		?>

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="search.php"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="applications.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="prof-all.php">Team</a></li>
						<li class="nav-item"><a class="nav-link" href="legalresearch.php">Research</a></li>
                        <li class="nav-item"><a class="nav-link" href="newscomments.php">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="recruits.php">Careers</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li>
                    </ul>

                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end2">
                        <li><a href="../index.php" onclick="_blank">中文</a></li>
                        <li>|</li>
                        <li><a href="./index.php">English</a></li>
 <li>|</li> <li><a href="./traditional/index.php" onclick="_blank">繁体</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_text_inner">
                    <h4></h4>
                    <h5></h5>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                                <div class="static_text">
                                    <h3>Search Keyword: <?php echo $KEYWORD;?></h3>
                                    <br>
									<?php 	
									
									$Sql="SELECT * FROM TEAM_EN WHERE NAME LIKE '%".$KEYWORD."%' OR RESUME LIKE '%".$KEYWORD."%' OR RepresentativeCase LIKE '%".$KEYWORD."%';" ;
									$uresult = $mysqli->query($Sql); 
									//echo $Sql;
									while ($row = $uresult->fetch_assoc())
									{
									
										echo "<p>";
										echo "<a href='saelink-team-en.php?id=".$row['SL_ID']."'>";
										echo $row['NAME'];
										echo "</a>";
										
										echo "<br></p>";
									
										echo "<ul>";
												echo "<li>";
													echo substr($row['RESUME'],0,strpos($row['RESUME'],'<br>'));
													//echo strpos($row['RESUME'],'<br>');
												echo "</li>";
										echo "</ul>";
										echo "<br></p>";
										}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
									?>
									

                                    <br>
                                </div>



                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right_sidebar_area">
                                <aside class="right_widget r_news_widget">
                                    <div class="r_w_title">
                                        <h3>News</h3>
                                    </div>
                                    <div class="news_inner">
                                        <div class="news_item">
                                            <a href="#"><h4>YC Zhou gave keynote speech at "Cross-Strait Trade Secret Investigation and Litigation Practice Seminar" in Taipei </h4></a>
                                            <a href="#"><h6>7th June, 2019</h6></a>
                                        </div>
                                        <div class="news_item">
                                            <a href="#"><h4>YC Zhou presented at the Sunshine Intellectual Property Forum on "Several Thoughts on Improving the Trial Procedure for Patent Cases in China"</h4></a>
                                            <a href="#"><h6>9th June, 2019</h6></a>
                                        </div>
                                        <div class="news_item">
                                            <a href="#"><h4>Dr. Wenxuan Chen was Invited to speak at the International Federation of Intellectual Property Attorneys (FICPI)</h4></a>
                                            <a href="#"><h6>11th June 2019</h6></a>
                                        </div>
                                    </div>
                                </aside>

                                <aside class="right_widget r_tag_widget">
                                    <div class="r_w_title">
                                        <h3>Key Words</h3>
                                    </div>
                                    <ul>
                                        <li><a href="search.php?keyword=Patent">Patent</a></li>
                                        <li><a href="search.php?keyword=Trade Secret">Trade Secret</a></li>
                                        <li><a href="search.php?keyword=Anti-trust">Anti-trust</a></li>
                                        <li><a href="search.php?keyword=Competition">Competition</a></li>
                                        <li><a href="search.php?keyword=Trademark">Trademark</a></li>
                                        <li><a href="search.php?keyword=Copyright">Copyright</a></li>
                                        <li><a href="search.php?keyword=Domain Name">Domain Name</a></li>
                                        <li><a href="search.php?keyword=Data Protection">Data Protection</a></li>
                                        <li><a href="search.php?keyword=Commercial Litigation">Commercial Litigation</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Static Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="f_widgets_inner row">
                         <div class="col-lg-6 col-md-12">
                          <div class="f_w_title">
                            <h3>SAELINK LAW</h3>
                            <p>19th Floor, Block A, 7 Jianguomen South Ave. Beijing,  China | +86-10-65265396 | info@saelinklaw.com</p>
                          </div>

                        </div>
                        <div class="col-lg-2 col-md-4">
                                <div class="f_w_title">
                                </div>

                        </div>
                        <div class="col-lg-2 col-md-4">
                                <div class="f_w_title">
                                </div>

                        </div>
                        <div class="col-lg-2 col-md-4">
     <?php include("social.php"); ?>
                        </div>

                </div>
            </div>
          </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
             <h5>©SAELINK LAW 2020 All Rights Reserved<a href="http://beian.miit.gov.cn" target="_blank">&nbsp 京ICP备19055298号-1</a></h5>

                    </div>
                    <div class="float-md-right">
                        <ul class="nav">
                          <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                          </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Social Responsibility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Legal Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Website Map</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/parallaxer/jquery.parallax-1.1.3.js"></script>
        <!--Tweets-->
        <script src="vendors/tweet/tweetie.min.js"></script>
        <script src="vendors/tweet/script.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
