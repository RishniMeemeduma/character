<?php

session_start();
require_once __DIR__ . '/vendor/autoload.php';

$img=$_GET['img'];
$u_name=$_SESSION['u_name'];  
$timing=$_SESSION['timing'];
?>     
  
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>Find your Character</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<meta property="fb:app_id"		content="178728269598594" />
	<!--<meta property="og:url"          content="https://findcharacter.herokuapp.com/result_new.php" />-->
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Find your koombiyo Character" />
	<meta property="og:description"   content="Koombiyo is a famous teledarama and you may like to check which character in koombiyo looks like you." />
	<meta property="og:image"         content="<?php echo $img ?>" />
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <style>
   @font-face {
	 font-family: araliya;
	 src: url(fonts/ARALIYA.TTF);
	}
    body{
        background:url(https://thumbs.dreamstime.com/b/shiny-silver-foil-texture-background-decor-white-grey-metallic-85153852.jpg) repeat center;
        background-size:cover;
	
        }
    img {
         margin-top: 80px;
         position: relative;
         margin-left: 35px;
        }
    .fb-share-button{
          transform: scale(1.5);
          transform-origin: top left;
          position: absolute !important;
          top: 162px;
          left: 71%;

        }
    .new-request{
        display: block;
        margin-top: 30%;
        padding: 12px 20px;
        background: rgba(12, 159, 213, 0.78);
        color: #fff;
        text-align: center;
        font-size: 24px;
         font-family: araliya;
        }
    
    .new-request:hover{
        color:#fff;
        text-decoration:none;
        }
     .new
        {
         position: absolute;
         display: inline;
         left: 71%;
         top: 47%;
        }
	 @media screen and (max-width: 992px) {
	  body {
	    background-color: blue;
	  }
	img{
	}
	.fb-share-button{
		 }
	.new-request{
		 }
	}
    </style>
    
</head>
<body>


<?php
/********************* Randomly select Character form php********************************/        
/*$characters= array("Hiruni","Priyantha","Adikari","Anjana","Meesha","Ananda","Jude","Thenne","Jehan","Maldeniya","Dog of Maldeniy","Tiran","Ostin aiya","Sudu nangi" );
$k = array_rand($characters);
$v = $characters[$k];*/
/****************************************************************************************/

/*****************************Using Curl Send and get the Image from webhost*****************/
/*$ch = curl_init();
      
curl_setopt($ch, CURLOPT_URL,"http://koombiyoweb.000webhostapp.com/result_new.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"uname=$u_name&cname=$v&id=$u_id");

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);  //response

$server_output =json_decode($server_output, true);



//echo var_dump($server_output);

$myimg=$server_output['image'];*/


?>
<!--<img src="data:image/png;base64, <?php //echo $myimg;?>" alt="Red dot" />-->
  <img src="<?php echo $img ?>">
 <?php
//curl_close ($ch);
/***********************************************************************************************/
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=178728269598594&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
	<div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result_new.php?img=<?php echo $img ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult_new.php%3Fimg%3D%253C%253Fphp%2Becho%2B%2524img%2B%253F%253E&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
	<div class="new"><a class="new-request" href="https://findcharacter.herokuapp.com/index.php">f.aula .y,u n,uqo@</a></div>
	

  </body>
  </html>





