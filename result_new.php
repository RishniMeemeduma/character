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
   	 #image {
         	margin-top: 78px;
		
        }
	 #share{
		 margin-top:183px;
	  }
   	.fb-share-button{
		  transform: scale(1.5);
		  transform-origin: top left;
		  position: absolute !important;
		  

        }
    .new-request{
        
		background: teal;
		color: #fff;
		text-align: center;
		font-size: 24px;
		 font-family: araliya;
        }
     #new
        {
	background-color: teal;	 
	margin-top:19px;
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
	     background-color: teal;
	}
	
	.image{
	  }
	  }
    </style>
    
</head>
<body>
	<script>
		(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=178728269598594&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
	</script>
	
<div class="container">
	<div class="row">
		<div id="image" class="col-lg-9 col-md-9 col-sm-9">
		<center>
		  <img src="<?php echo $img ?>">
		</center>
		</div>
			
		<div id="share" class="col-lg-3 col-md-3 col-sm-3">
		<div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result_new.php?img=<?php echo $img ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult_new.php%3Fimg%3D%253C%253Fphp%2Becho%2B%2524img%2B%253F%253E&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
		</div>
		</div>
	<div class="row">
		<div id="new" class="col-lg-9 col-md-9 col-sm-9">
			<center>
			<a class="new-request" href="https://findcharacter.herokuapp.com/index.php">Thdf. prsf;;a fu;kska n,d.uq</a>
			</center>
		</div>
	</div>
</div>

  </body>
  </html>





