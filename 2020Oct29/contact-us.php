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
                        <li class="nav-item"><a class="nav-link" href="index.php">首页</a></li>
                        <li class="nav-item"><a class="nav-link" href="aboutus.php">关于世宁</a></li>
                        <li class="nav-item"><a class="nav-link" href="applications.php">服务领域</a></li>
                        <li class="nav-item"><a class="nav-link" href="prof-all.php">专业人员</a></li>
						<li class="nav-item"><a class="nav-link" href="legalresearch.php">法律研究</a></li>
                        <li class="nav-item"><a class="nav-link" href="newscomments.php">世宁动态</a></li>
                        <li class="nav-item"><a class="nav-link" href="recruits.php">诚聘英才</a></li>
                        <li class="nav-item active"><a class="nav-link" href="contact-us.php">联系我们</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li><a href="#"><i class="icon_search"></i></a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end2">
                        <li><a href="./contact-us.php">中</a></li>
                        <li>|</li>
                        <li><a href="./en/contact-us.php" onclick="_blank">EN</a></li>
						<li>|</li> 
						<li><a href="./traditional/index.php" onclick="_blank">繁</a></li>
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

        <!--================Contact Us Area =================-->
        <section class="contact_us_area">
            <div class="container">
                <div class="contact_details_inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact_text">
                                <div class="main_title">
                                    <h2>联系我们</h2>
                                </div>
                                <div class="contact_d_list">
                                    <div class="contact_d_list_item">
                                        <a href="#"><i class="fa fa-phone"></i>&nbsp  电话：+86-10-65265396</a>
                                        <a href="#"><i class="fa fa-fax"></i>  传真：+86-10-65265503</a>
                                        <a href="#"><i class="fa fa-envelope-open"></i>  电邮：info@saelinklaw.com</a>
                                        <a><i class="fa fa-map-marker"></i>&nbsp&nbsp  地址：北京市建国门南大街7号A座19层</a>
                                        <a><i class="fa fa-clock-o"></i>&nbsp 办公时间: 周一~周五 9:00-19:00</a>
                                  </div>
                                </div>
                                <div class="map_img">
                                    <img class="img-fluid" src="img/location.jpg"/>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact_form">
                                <div class="main_title">
                                    <h2>立即咨询</h2>
                                    <p></p>
                                </div>
                                <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="姓名">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="邮箱">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="咨询主题">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="请输入咨询内容"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn submit_btn2 form-control">立即发送</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Us Area =================-->

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

        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>感谢您的信息</h2>
                        <p>您的信息已经成功发送...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>抱歉 !</h2>
                        <p> 信息未成功发送... </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->


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
        <!--gmaps Js
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        -->
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
