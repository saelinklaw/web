<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>世宁律师事务所 SAELINK LAW</title>

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
<?php include("owa.php"); ?>

<?php include("db.php"); ?>
	
	<?php
		$ID = $_GET["id"];
	
		$Sql="SELECT * FROM SL_INDUSTRY WHERE ID ='".$ID."' ORDER BY DATE  ;" ;
		$uresult = $mysqli->query($Sql); 
		$row = $uresult->fetch_assoc();
		
		$NAME=$row['NAME'];
		
		$Sql="SELECT * FROM INDUSTRY_L1_CN WHERE SL_INDUSTRY_ID ='".$ID."' ORDER BY DATE  ;" ;
		$uresult = $mysqli->query($Sql); 
		
	
		
		
		?>
	
    <body>

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
                        <li class="nav-item"><a class="nav-link" href="index.php">首页</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php">关于世宁</a></li>
                        <li class="nav-item active"><a class="nav-link" href="applications.php">服务领域</a></li>
                        <li class="nav-item"><a class="nav-link" href="prof-all.php">专业人员</a></li>
						<li class="nav-item"><a class="nav-link" href="legalresearch.php">法律研究</a></li>
                        <li class="nav-item"><a class="nav-link" href="newscomments.php">世宁动态</a></li>
                        <li class="nav-item"><a class="nav-link" href="recruits.php">诚聘英才</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">联系我们</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end2">
                        <li><a href="telecom.html">中</a></li>
                        <li>|</li>
                        <li><a href="./en/telecom.html" onclick="_blank">EN</a></li>
						<li>|</li>
                        <li><a href="#" onclick="_blank">繁</a></li>
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
                                  <h3><?php echo $NAME ?></h3>
                              </div>
                              <div class="static_main_content">
                                
								  
       <?php
		while ($row = $uresult->fetch_assoc())
		{
				echo $row['NAME'];
			    //echo $Sql;
					}
		
		?>
					
				  

								  
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="right_sidebar_area">
                            <aside class="right_widget r_cat_widget">
                                <div class="r_w_title">
                                    <h3>相关行业</h3>
                                </div>
                                <ul>
                                  <li><a href="#">信息技术、互联网与电子商务</a></li>
                                  <li><a href="#">制药、生物技术与医疗健康</a></li>
                                  <li><a href="#">机械与高端制造</a></li>
                                  <li><a href="#">化工、能源与环境工程</a></li>
                                </ul>
                            </aside>
                            <aside class="right_widget r_cat_widget">
                                <div class="r_w_title">
                                    <h3>相关业务</h3>
                                </div>
                                <ul>
                                    <li><a href="#">专利与商业秘密</a></li>
                                    <li><a href="#"> 反垄断及反不正当竞争</a></li>
                                    <li><a href="#"> 商标、著作权及域名</a></li>
                                    <li><a href="#"> 数据合规及个人信息保护</a></li>
                                    <li><a href="#"> 商事诉讼仲裁</a></li>
                                    <li><a href="#"> 跨境谈判、知识产权许可及转让</a></li>
                                </ul>
                            </aside>
                            <aside class="right_widget r_news_widget">
                                <div class="r_w_title">
                                    <h3>相关动态</h3>
                                </div>
                                 <div class="news_inner">
                                        <div class="news_item">
                                            <a href="news.php?id=1"><h4>世宁律师事务所 | 这就是我们 THIS IS US</h4></a>
                                            <a href="#"><h6>12月3日, 2019</h6></a>
                                        </div>
                                        <div class="news_item">
                                            <a href="news.php?id=2"><h4>刘永全律师、陈文煊律师受邀参加“中国知识产权典型案例·清华论坛2019”（专利法专场）并发表演讲
</h4></a>
                                            <a href="#"><h6>12月3日, 2019</h6></a>
                                        </div>
                                        <div class="news_item">
                                            <a href="news.php?id=3"><h4>陈文煊在国际知识产权律师联合会公开论坛上发表演讲
</h4></a>
                                            <a href="#"><h6>12月3日, 2019</h6></a>
                                        </div>
                                    </div>
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
                        <h5>©SAELINK LAW 2020 版权所有<a href="http://beian.miit.gov.cn" target="_blank">&nbsp 京ICP备19055298号-1</a></h5>
                    </div>
                    <div class="float-md-right">
                        <ul class="nav">
                          <li class="nav-item">
                                <a class="nav-link" href="#">隐私政策</a>
                          </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">社会责任</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">法律声明</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">网站地图</a>
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
