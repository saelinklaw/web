﻿
<?php
 // IP、GEO、BROWSER、REALIP
 class get_gust_info { 
  
  ////获得访客浏览器类型
  function GetBrowser(){
   if(!empty($_SERVER['HTTP_USER_AGENT'])){
    $br = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/MSIE/i',$br)) {    
               $br = 'MSIE';
             }elseif (preg_match('/Firefox/i',$br)) {
     $br = 'Firefox';
    }elseif (preg_match('/Chrome/i',$br)) {
     $br = 'Chrome';
       }elseif (preg_match('/Safari/i',$br)) {
     $br = 'Safari';
    }elseif (preg_match('/Opera/i',$br)) {
        $br = 'Opera';
    }else {
        $br = 'Other';
    }
    return $br;
   }else{return "获取浏览器信息失败！";} 
  }
  
  ////获得访客浏览器语言
  function GetLang(){
   if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $lang = substr($lang,0,5);
    if(preg_match("/zh-cn/i",$lang)){
     $lang = "简体中文";
    }elseif(preg_match("/zh/i",$lang)){
     $lang = "繁体中文";
    }else{
        $lang = "English";
    }
    return $lang;
    
   }else{return "获取浏览器语言失败！";}
  }
  
   ////获取访客操作系统
  function GetOs(){
   if(!empty($_SERVER['HTTP_USER_AGENT'])){
    $OS = $_SERVER['HTTP_USER_AGENT'];
      if (preg_match('/win/i',$OS)) {
     $OS = 'Windows';
    }elseif (preg_match('/mac/i',$OS)) {
     $OS = 'MAC';
    }elseif (preg_match('/linux/i',$OS)) {
     $OS = 'Linux';
    }elseif (preg_match('/unix/i',$OS)) {
     $OS = 'Unix';
    }elseif (preg_match('/bsd/i',$OS)) {
     $OS = 'BSD';
    }else {
     $OS = 'Other';
    }
          return $OS;  
   }else{return "获取访客操作系统信息失败！";}   
  }
  
  ////获得访客真实ip
  function Getip(){
   if(!empty($_SERVER["HTTP_CLIENT_IP"])){   
      $ip = $_SERVER["HTTP_CLIENT_IP"];
   }
   if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //获取代理ip
    $ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
   }
   if($ip){
      $ips = array_unshift($ips,$ip); 
   }
   
   $count = count($ips);
   for($i=0;$i<$count;$i++){   
     if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//排除局域网ip
      $ip = $ips[$i];
      break;    
      }  
   }  
   $tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR']; 
   if($tip=="127.0.0.1"){ //获得本地真实IP
      return $this->get_onlineip();   
   }else{
      return $tip; 
   }
  }
  

	 
  ////获得本地真实IP
  function get_onlineip() {
      $mip = file_get_contents("http://city.ip138.com/city0.asp");
       if($mip){
           preg_match("/\[.*\]/",$mip,$sip);
           $p = array("/\[/","/\]/");
           return preg_replace($p,"",$sip[0]);
       }else{return "获取本地IP失败！";}
   }
  
  ////根据ip获得访客所在地地名
  function Getaddress($ip=''){
   if(empty($ip)){
       $ip = $this->Getip();    
   }
   $ipadd = file_get_contents("https://ipgeolocation.io/ip-location/".$ip);   //API
   if($ipadd){
    $charset =   $ipadd ;
   // preg_match_all("/[\x{4e00}-\x{9fa5}]+/u",$charset,$ipadds);
	preg_match_all ("/<span class=\"ip-info-right\">\"(.*)\",<\/span>/U", $charset, $ipadds);
	preg_match_all ("A(.*)AA /U", $charset, $ipadds);

	preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $charset, $ipadds, PREG_SET_ORDER);

	print_r($ipadds[0]);

    
    return $ipadds;   //返回一个二维数组
   }else{return "addree is none";}  
  } 
 }
 $gifo = new get_gust_info();

echo "IP-Informationen von SL-SRV abrufen: ".$gifo->Getip();



// $ipadds = $gifo->Getaddress();

	//$ipadd = file_get_contents("https://ipgeolocation.io/ip-location/".$gifo->Getip());
//echo $ipadd ;
 




$html =file_get_contents("https://ipgeolocation.io/ip-location/".$gifo->Getip());
preg_match_all ("/<span\sclass=\"ip-info-right\">\"(.*)\",<\/span><br>/U", $html,$result); 

//var_dump($result);

// foreach($result[1] as $Value){
//     echo "\r\n    ".iconv("UTF-8","GBK",$Value);    
// }

echo "<br>";

echo "<br> Continent Name:" ;
echo $result[1][2];


echo "<br> Country Name:" ;
echo $result[1][5];

echo "<br> Country Capital	:" ;
echo $result[1][7];

echo "<br> District:" ;
echo $result[1][8];

echo "<br> City:" ;
echo $result[1][9];

echo "<br> Zip Code:" ;
echo $result[1][10];


echo "<br> Latitude & Longitude of City	:" ;
echo $result[1][11];
echo " ";
echo $result[1][12];


echo "<br> Geoname ID:" ;
echo $result[1][13];


echo "<br> Calling Code	:" ;
echo $result[1][14];


echo "<br> Country TLD	:" ;
echo $result[1][15];


echo "<br> ISP:" ;
echo $result[1][20];


echo "<br> Organization:" ;
echo $result[1][18];



//////////////////////////

 
 ?>


