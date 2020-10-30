<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>世寧律師事務所 SAELINK LAW</title>

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
		<?php
		$ID = $_GET["id"];
		
		$mysqli  = new mysqli("localhost", "SL", "pNHgvAZfLqa8B5i6rZTqwDGuKMljaHTY", "SAELINK");
		$Sql="SELECT * FROM TEAM_TC WHERE SL_ID ='".$ID."';" ;
		$uresult = $mysqli->query($Sql); 
		
		$row = $uresult->fetch_assoc()
		
		?>
    </head>
	
	<?php include("owa.php"); ?>
    <body>

        <!--================Search Area =================-->
<?php include("search-html.php"); ?>
        <!--================End Search Area =================-->
		
		

        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item "><a class="nav-link" href="index.php">首頁</a></li>
                        <li class="nav-item "><a class="nav-link" href="aboutus.php">關於世寧</a></li>
                        <li class="nav-item"><a class="nav-link" href="applications.php">服務領域</a></li>
                        <li class="nav-item active"><a class="nav-link" href="prof-all.php">專業人員</a></li>
			            <li class="nav-item"><a class="nav-link" href="legalresearch.php">法律研究</a></li>
                        <li class="nav-item"><a class="nav-link" href="newscomments.php">世寧動態</a></li>
                        <li class="nav-item"><a class="nav-link" href="recruits.php">誠聘英才</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">聯繫我們</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end2">
                        <li><a href="../saelink-team.php?id=<?php echo $ID ?>">中</a></li>
                        <li>|</li>
                        <li><a href="../en/saelink-team-en.php?id=<?php echo $ID ?>" onclick="_blank">EN</a></li>
						<li>|</li>
                        <li><a href="saelink-team.php?id=<?php echo $ID ?>" onclick="_blank">繁</a></li>
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
                  		              <img class="img-fluid" width="180" height="220" src="../foto/<?php echo $row['SL_ID'] ?>.jpg"/>
                                    <br>
                                </div>
                                <div class="people_text">
                                    <br>
                                    <h5>聯系方式</h5>
                                    <p><a href="#">電話：<?php echo $row['TELE'] ?></a></p>
                                    <p><a href="#">傳真：<?php echo $row['FAX'] ?></a></p>
                                    <p><a href="mailto:<?php echo $row['EMAIL'] ?>">電郵：<?php echo $row['EMAIL'] ?></a></p>
                                    <br>
                                </div>

                              <div class="people_text">
                                  <h5>教育背景</h5>
                                  <p><a><?php 
										$EDU=$row['EDU'];

			      						echo $EDU;
									  	?></a></p>
                                  <br>
                              </div>

                            <div class="people_text"> 
                                <h5>執業資格</h5>
                                <p><a><?php echo $row['Qualification'] ?></a></p>
                                <br>
                            </div>
				       <div class="people_text">
                                    <h5>工作語言</h5>
                                        <p><a><?php echo $row['LANGUAGE'] ?></a></p>
                                        <br>
                                    </div>
                          </div>
                      </div>

                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                            <div class="static_main_content">
                              <div class="static_text2">
                                <h3>個人履歷</h3>
                                <p></p>
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
													echo "代表性案例";
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

 <!--=====================================================================================-->
                                  <div class="col-lg-3">
		                           <div class="static_text3">
                                      <p><br></p>
                                        <h5>相關文章</h5>
                                        <ul>
										
										<?php
									    	$Sql="SELECT * FROM V_SL_NEWS_TC WHERE SL_ID ='".$ID."' ORDER BY DATE DESC;" ;
											$uresult = $mysqli->query($Sql);
											while ($row = $uresult->fetch_assoc())
											{
												$Title=$row['TITLE'];
												
											?>
											
                                           <li><a href="news.php?id=<?php echo $row['SL_NEWS_ID'] ?>"><?php echo $Title ?></a></li>
											
										<?php	}?>
                                        </ul>
                             
                                     </div>
									  <?php
									  	if ($ID == 'rliu' or $ID=="yczhou" or $ID=="wxchen" or $ID=="ffeng" or $ID=="nli")
										{
											
									  ?>
                                    <div class="static_text2">
                                      <p><br></p>
                                        <h5>專業領域</h5>
                                        <ul>
										<?php
												$Sql="SELECT * FROM V_SL_SERVICES_CT WHERE SL_ID ='".$ID."';" ;
												$uresult = $mysqli->query($Sql);
					
												while ($row = $uresult->fetch_assoc())
											{
		
											?>
                                          <li><a href="service-l2.php?SL_SERVICES_ID=<?php echo $row['ID'] ?>"><?php echo $row['NAME'] ?></a></li>
											<?php	}?>
                                        </ul>
                             
                                     </div>
								<?php	}?>
									  
                                  </div>
 <!--=====================================================================================-->
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
                            <h3>世宁律师事务所</h3>
                            <p>北京市建国门南大街7号A座19层 | 010-65265396 | info@saelinklaw.com</p>
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
					<?php include("social.php"); ?>


                </div>
            </div>
          </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="float-md-left">
  						<h5>©SAELINK LAW 2020 版權所有<a href="http://beian.miit.gov.cn" target="_blank">&nbsp 京ICP備19055298號-1</a></h5>
                    </div>
                    <div class="float-md-right">
                        <ul class="nav">
                          <li class="nav-item">
                                <a class="nav-link" href="#">隱私政策</a>
                          </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">社會責任</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">法律聲明</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">網站地圖</a>
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
