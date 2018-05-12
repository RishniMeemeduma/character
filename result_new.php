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
   	 .image {
         	margin-top: 5%;
        }
	img{
		margin-left: 13%;
		margin-right: auto;
		display: block;
	  }
   	.fb-share-button{
		  transform: scale(1.5);
		  transform-origin: top left;
		  position: absolute !important;
		  top: 162px;
		  left: 71%;

        }
    .new-request{
        
		background: rgba(12, 159, 213, 0.78);
		color: #fff;
		text-align: center;
		font-size: 24px;
		 font-family: araliya;
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
	   
	  }
	img{
	    margin-left: 0;
   	    margin-right: 0;
	}
	.fb-share-button{
		 }
	.new{
		 }
	
	.image{
	  }
	  }
    </style>
    
</head>
<body>
<div class="container">
	<div class="row">
	<div id="image" class="col-sm-8">
	  <img src="<?php echo $img ?>">
	</div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=178728269598594&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result_new.php?img=<?php echo $img ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult_new.php%3Fimg%3D%253C%253Fphp%2Becho%2B%2524img%2B%253F%253E&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
	<div class="new"><a class="new-request" href="https://findcharacter.herokuapp.com/index.php">f.aula .y,u n,uqo@</a></div>
</div>	

  </body>
  </html>





