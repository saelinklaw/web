<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("db.php"); ?>
<?php include("owa.php"); ?>


		<?php
		$ID = $_GET["id"];
		
		$Sql="SELECT * FROM TEAM_EN WHERE SL_ID ='".$ID."';" ;
		$uresult = $mysqli->query($Sql); 
		
		$row = $uresult->fetch_assoc();
		
		?>
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SAELINK LAW 世宁律师事务所 <?php echo $row['NAME'] ?></title>

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
	    <link href="css/style2020.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

				
		
		
    </head>

    <body>

        <!--================Search Area =================-->
<?php include("search-html.php"); ?>
        <!--================End Search Area =================-->

		

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo1.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="applications.php">Services</a></li>
                        <li class="nav-item active"><a class="nav-link" href="prof-all.php">Team</a></li>
						<li class="nav-item"><a class="nav-link" href="legalresearch.php">Research</a></li>
                        <li class="nav-item"><a class="nav-link" href="newscomments.php">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="recruits.php">Careers</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li>
                    </ul>

                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end2">
                        <li><a href="../saelink-team.php?id=<?php echo $ID ?>" onclick="_blank">中文</a></li>
                        <li>|</li>
                        <li><a href="./saelink-team-en.php?id=<?php echo $ID ?>">English</a></li>
			            <li>|</li>
                        <li><a href="../traditional/saelink-team.php?id=<?php echo $ID ?>">繁體</a></li>
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
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->


        <!--================Professionals Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">

                      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                          <div class="static_main_content">
                            <div class="static_text2">
                                    <h2><?php echo $row['NAME'] ?></h2>
                                    <br>
                                </div>
                                <div class="people_img">
                  		              <img class="img-fluid" width="180" height="220" src="/foto/<?php echo $row['SL_ID'] ?>.jpg"/>
                                    <br>
                                </div>
                                <div class="people_text">
                                    <br>
                                    <h5>Contact</5>
                                    <p><a href="#">Tel：<?php echo $row['TELE'] ?></a></p>
                                    <p><a href="#">Fax：<?php echo $row['FAX'] ?></a></p>
                                    <p><a href="mailto:<?php echo $row['EMAIL'] ?>">EMail：<?php echo $row['EMAIL'] ?></a></p>
                                    <br>
                                </div>

                              <div class="people_text">
                                  <h5>Education</h5>
                                  <p><a><?php echo $row['EDU'] ?></a></p>
                                  <br>
                              </div>

                            <div class="people_text">
                                <h5>Admission</h5>
                                <p><a><?php echo $row['Qualification'] ?></a></p>
                                <br>
                            </div>
				             <div class="people_text">
                                        <h5>Language</h5>
                                         <p><a><?php echo $row['LANGUAGE'] ?></a></p>
                                        <br>
                                    </div>
                          </div>
                      </div>

                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                            <div class="static_main_content">
                              <div class="static_text2">
                                <h3>Profile</h3>
                              </div>
                              <div class="container">
                                <div class="row">
                                  <div class="col-lg-7">
                                    <div class="static_text">
                  					<?php 
									$Resume= $row['RESUME'];
									echo $Resume;
									?>
										
                                    </div>
                                    <div class="static_text2">
                                      <h5>
								  <?php
										  		$RepresentativeCase= $row['RepresentativeCase'];
										  		if (strlen($RepresentativeCase)>2)
												{
													echo "Recent Representations";
												}
										  ?>
										  
										  
									  </h5>
                                      <br>
      								<?php 
										$RepresentativeCase= $row['RepresentativeCase'];

										echo $RepresentativeCase;
										?>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                  <div class="col-lg-1">
                                  </div>
                                  <div class="col-lg-3">
<!--=============================================================================-->

                                    <div class="static_text3">
                                      <p><br></p>
                                        <h5>Publications&News</h5>
                                        <ul>
                                          <li><a href="/news.php?id=1">THIS IS US</a></li>

                                        </ul>
                                        <br>
                                    </div>
<!--=============================================================================-->
	
									   <?php
									  	if ($ID == 'rliu' or $ID=="yczhou" or $ID=="wxchen" or $ID=="ffeng" or $ID=="nli")
										{
											
									  ?>
                                    <div class="static_text3">
                                      <p><br></p>
                                        <h5>Service</h5>
                                        <ul>
										<?php
												$Sql="SELECT * FROM V_SL_SERVICES_EN WHERE SL_ID ='".$ID."';" ;
												$uresult = $mysqli->query($Sql);
					
												while ($row = $uresult->fetch_assoc())
											{
		
											?>
                                          <li><a href="service-l2.php?SL_SERVICES_ID=<?php echo $row['ID'] ?>"><?php echo $row['NAME'] ?></a></li>
											<?php	}?>
                                        </ul>
                             
                                     </div>
								<?php	}?>

<!--=============================================================================-->
				
<!--=============================================================================-->
									  			  

<!--=============================================================================-->
<!--=============================================================================-->
<!--=============================================================================-->
<!--=============================================================================-->
<!--=============================================================================-->
<!--=============================================================================-->
<!--=============================================================================-->
<!--=============================================================================-->

									  

                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--================End Professionals Area =================-->

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
