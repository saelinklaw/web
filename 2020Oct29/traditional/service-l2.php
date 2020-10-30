<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>世寧律師事務所 SAELINK LAW</title>
		<?php include("db.php"); ?>

		<?php
		$SL_SERVICES_ID = $_GET["SL_SERVICES_ID"];
		
		$Sql="SELECT * FROM SERVICES_ID_L2_CT WHERE SL_SERVICES_ID ='".$SL_SERVICES_ID."';" ;

		$L2 = $mysqli->query($Sql);
		
		$Sql="SELECT * FROM SL_SERVICES_CT WHERE ID ='".$SL_SERVICES_ID."';" ;
		
		
		$L1 = $mysqli->query($Sql);
		$L1_ROW = $L1->fetch_assoc();
		?>

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
				
		




		

        <!--================Search Area =================-->
        <section class="search_area">
            <div class="search_inner">
                <input type="text" placeholder="请输入搜索项...">
                <i class="ti-close"></i>
            </div>
        </section>
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
                        <li class="nav-item"><a class="nav-link" href="index.php">首頁</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php">關於世寧</a></li>
                        <li class="nav-item active"><a class="nav-link" href="applications.php">服務領域</a></li>
                        <li class="nav-item"><a class="nav-link" href="prof-all.php">專業人員</a></li>
						<li class="nav-item"><a class="nav-link" href="legalresearch.php">法律研究</a></li>
                        <li class="nav-item"><a class="nav-link" href="newscomments.php">世寧動態</a></li>
                        <li class="nav-item"><a class="nav-link" href="recruits.php">誠聘英才</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">聯系我們</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end2">
                        <li><a href="../service-l2.php?SL_SERVICES_ID=<?php echo $SL_SERVICES_ID ; ?>">中文</a></li>
                        <li>|</li>
                        <li><a href="./en/patent.html" onclick="_blank">English</a></li>
						<li>|</li>
							<li><a href="./service-l2.php?SL_SERVICES_ID=<?php echo $SL_SERVICES_ID ; ?>">繁體</a></li>
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

        <!--================Practices Area =================-->
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                      <div class="col-lg-9">
                          <div class="static_main_content">
                              <div class="static_text">
                                  <h3><?php echo $L1_ROW['NAME'] ?></h3>
                                  <p><br><br></p>
                              </div>
                              
								  	<?php
									while ($L2_ROW = $L2->fetch_assoc())
									{
		
								  		?>
							  <div class="static_text2">
                                <h4><?php echo $L2_ROW['NAME'] ?></h4>
                                <p></p>
                                <ul>
									<?php
									$Sql="SELECT * FROM SERVICES_ID_L3_CT WHERE SL_SERVICES_ID ='".$L2_ROW['ID']."';";
										
										
									$L3 = $mysqli->query($Sql);
									while ($L3_ROW = $L3->fetch_assoc())
									{
									
									?>
                                  <li><a><?php echo $L3_ROW['NAME'] ?></a></li>
                                
								 <?php   }?>
                                </ul>
                                <br>
                                <br>
                                </div>
							  <?php   }?>

							  
							  
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="right_sidebar_area">
                              <aside class="right_widget r_cat_widget">
                                  <div class="r_w_title">
                                      <h3>相關業務</h3>
                                  </div>
                                  <ul>
                                      <li><a href="antitrust.html"> 反壟斷及反不正當競爭</a></li>
                                      <li><a href="trademark.html"> 商標、著作權及域名</a></li>
                                      <li><a href="dataprotect.html"> 數據合規及個人信息保護</a></li>
                                      <li><a href="businesssuit.html"> 商事訴訟仲裁</a></li>
                                      <li><a href="negotiation.html"> 跨境談判、知識產權許可及轉讓</a></li>
                                  </ul>
                              </aside>
                              <aside class="right_widget r_cat_widget">
                                  <div class="r_w_title">
                                      <h3>相關行業</h3>
                                  </div>
                                  <ul>
                                    <li><a href="information.html">信息技術、互聯網與電子商務</a></li>
                                    <li><a href="telecom.html">電子與半導體</a></li>
                                    <li><a href="biology.html">制藥、生物技術與醫療健康</a></li>
                                    <li><a href="entertainment.html">體育與文娛產業</a></li>
                                    <li><a href="chemical.html">化工、能源與環境工程</a></li>
                                  </ul>
                              </aside>
                                <aside class="right_widget r_tag_widget">
                                    <div class="r_w_title">
                                        <h3>關鍵詞</h3>
                                    </div>
                                    <ul>
                                        <li><a href="patent.html">專利</a></li>
                                        <li><a href="patent.html">商業秘密</a></li>
                                        <li><a href="antitrust.html">反壟斷</a></li>
                                        <li><a href="antitrust.html">反不正當競爭</a></li>
                                        <li><a href="trademark.html">商標</a></li>
                                        <li><a href="trademark.html">著作權</a></li>
                                        <li><a href="trademark.html">域名</a></li>
                                        <li><a href="dataprotect.html">數據合規</a></li>
                                        <li><a href="dataprotect.html">大數據保護</a></li>
                                        <li><a href="businesssuit.html">商業訴訟</a></li>
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
                            <h3>世寧律師事務所</h3>
                            <p>北京市建國門南大街7號A座19層 | 010-65265396 | info@saelinklaw.com</p>
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
                          <div class="f_w_social">
                            <div class="static_social">
                              <ul>
                                  <li><a href="https://www.linkedin.com/in/saelink-law-49507a18a"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a href="wechatqr.php"><i class="fa fa-wechat"></i></a></li>
                                  <li><a href="https://m.weibo.cn/u/7209271739"><i class="fa fa-weibo"></i></a></li>
                              </ul>
                            </div>
                         </div>

                        </div>

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
