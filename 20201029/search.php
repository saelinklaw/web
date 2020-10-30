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
    <body>

		
<?php include("owa.php"); ?>
		
		<?php include("db.php"); ?>


		
		
		
		
        <!--================Search Area =================-->
<?php include("search-html.php"); ?>

        <!--================End Search Area =================-->
		
		
		<?php 
			
			$KEYWORD = $_POST["KEYWORD"];
					if (strlen($KEYWORD)<2)
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
                        <li class="nav-item"><a class="nav-link" href="index.php">首页</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php">关于世宁</a></li>
                        <li class="nav-item"><a class="nav-link" href="applications.php">服务领域</a></li>
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
                        <li><a href="./search.php">中</a></li>
                        <li>|</li>
                        <li><a href="./en/search.php" onclick="_blank">EN</a></li>
						<li>|</li> 
						<li><a href="./traditional/search.php" onclick="_blank">繁</a></li>
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
                                    <h3>搜索 关键词：<?php echo $KEYWORD;?></h3>
                                    <br>
									<?php 	
									
									$Sql="SELECT * FROM TEAM WHERE NAME LIKE '%".$KEYWORD."%' OR RESUME LIKE '%".$KEYWORD."%' OR RepresentativeCase LIKE '%".$KEYWORD."%';" ;
									$uresult = $mysqli->query($Sql); 
									//echo $Sql;
									while ($row = $uresult->fetch_assoc())
									{
									
										echo "<p>";
										echo "<a href='saelink-team.php?id=".$row['SL_ID']."'>";
										//echo $row['NAME'];
										$HTMLCON=$row['NAME'];
												$HTMLCON=str_replace($KEYWORD,"<font color='#FF0004'>".$KEYWORD."</font>",$HTMLCON);
										echo $HTMLCON;
										
										
										echo "</a>";
										
										echo "<br></p>";
									
										echo "<ul>";
												echo "<li>";
													//echo substr($row['RESUME'],0,strpos($row['RESUME'],'<br>'));
													//echo strpos($row['RESUME'],'<br>');
												$HTMLCON=substr($row['RESUME'],0,strpos($row['RESUME'],'<br>'));
												$HTMLCON=str_replace($KEYWORD,"<font color='#FF0004'>".$KEYWORD."</font>",$HTMLCON);
												echo $HTMLCON;
										
												echo "</li>";
										echo "</ul>";
										echo "<br></p>";
										}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
									?>
									

									
									<?php 	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
									$Sql="SELECT * FROM NEWS WHERE CONTENTHTML LIKE '%".$KEYWORD."%'  ;" ;
									$uresult = $mysqli->query($Sql); 
									//echo $Sql;
									while ($row = $uresult->fetch_assoc())
									{
									
										echo "<p>";
										echo "<a href='news.php?id=".$row['ID']."'>";
										$HTMLCON=$row['TITLE'];
												$HTMLCON=str_replace($KEYWORD,"<font color='#FF0004'>".$KEYWORD."</font>",$HTMLCON);
										echo $HTMLCON;
										echo "</a>";
										
										echo "<br></p>";
									
										echo "<ul>";
												echo "<li>";
												$HTMLCON=substr($row['CONTENTHTML'],0,strpos($row['CONTENTHTML'],'<br>'));
												$HTMLCON=str_replace($KEYWORD,"<font color='#FF0004'>".$KEYWORD."</font>",$HTMLCON);
												echo $HTMLCON;
													//echo strpos($row['RESUME'],'<br>');
												echo "</li>";
										echo "</ul>";
										echo "<br></p>";
										}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
									?>

									<?php 	
//////////////////////////////////////////////////////////////////////////////////////////////////////////
									$Sql="SELECT * FROM LegalResearch WHERE CONTENTHTML LIKE '%".$KEYWORD."%'  ;" ;
									$uresult = $mysqli->query($Sql); 
									//echo $Sql;
									while ($row = $uresult->fetch_assoc())
									{
									
										echo "<p>";
										echo "<a href='research.php?id=".$row['ID']."'>";
										echo $row['TITLE'];
										echo "</a>";
										
										echo "<br></p>";
									
										echo "<ul>";
												echo "<li>";
													//echo substr($row['CONTENTHTML'],0,strpos($row['CONTENTHTML'],'</strong></p>'));
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
                                        <h3>最新动态</h3>
                                    </div>
                                    <div class="news_inner">
                                        <div class="news_item">
                                            <a href="news.php?id=1"><h4>世宁律师事务所 | 这就是我们 THIS IS US</h4></a>
                                            <a href="#"><h6>12月3日, 2019</h6></a>
                                        </div>

                                        <div class="news_item">
                                            <a href="news.php?id=14"><h4>世宁荣膺2020《商法》卓越律所大奖——备受关注律所奖</h4></a>
                                            <a href="#"><h6>4月8日, 2020</h6></a>
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

                                <aside class="right_widget r_tag_widget">
                                    <div class="r_w_title">
                                        <h3>关键领域</h3>
                                    </div>
                                    <ul>
                                        <li><a href="search.php?keyword=专利">专利</a></li>
                                        <li><a href="search.php?keyword=商业秘密">商业秘密</a></li>
                                        <li><a href="search.php?keyword=反垄断">反垄断</a></li>
                                        <li><a href="search.php?keyword=反不正当竞争">反不正当竞争</a></li>
                                        <li><a href="search.php?keyword=商标">商标</a></li>
                                        <li><a href="search.php?keyword=著作权">著作权</a></li>
                                        <li><a href="search.php?keyword=域名">域名</a></li>
                                        <li><a href="search.php?keyword=数据合规">数据合规</a></li>
                                        <li><a href="search.php?keyword=大数据保护">大数据保护</a></li>
                                        <li><a href="search.php?keyword=商事诉讼仲裁">商事诉讼仲裁</a></li>
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
     <?php include("social.php"); ?>
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
