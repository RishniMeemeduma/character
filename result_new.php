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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<meta property="fb:app_id"		content="178728269598594" />
	<!--<meta property="og:url"          content="https://findcharacter.herokuapp.com/result_new.php" />-->
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Find your koombiyo Character" />
	<meta property="og:description"   content="Koombiyo is a famous teledarama and you may like to check which character in koombiyo looks like you." />
	<meta property="og:image"         content="<?php echo $img ?>" />
	
  <style>
 	@font-face {
		font-family: araliya;
		src: url(fonts/ARALIYA.TTF);
	}
    	body{
       	 background:url(https://thumbs.dreamstime.com/b/shiny-silver-foil-texture-background-decor-white-grey-metallic-85153852.jpg) repeat center;
       	 background-size:cover;
	
        }
	.container{
		background-color:white;
		margin-top:10px;
	}
   	 #image {
         	margin-top: 40px;
		
        }
	 #share{
		 margin-top:40px;
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
   @media screen and (max-width:990px) {
	body {
	   
	  }
	.img-responsive{
	    margin-left: 0;
   	    margin-right: 0;
	}
	.fb-share-button{
		 }
	.new{
	     background-color: teal;
	}
	.new::after{
	   	content:"";
		margin-bottom:15px;
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
		<div id="image" class="col-lg-8 col-md-8 col-sm-8">
		<center>
		  <img class="img-responsive" src="<?php echo $img ?>">
		</center>
		</div>
			
		<div id="share" class="col-lg-3 col-md-3 col-sm-3">
		<center>
		<div data-href="https://findcharacter.herokuapp.com/result_new.php?img=<?php echo $img ?>" data-mobile-iframe="true">
			<a class="fb-xfbml-parse-ignore"  onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600'); return false;" 
			   href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult_new.php%3Fimg%3D%253C%253Fphp%2Becho%2B%2524img%2B%253F%253E&amp;src=sdkpreparse" >
			<img src="img/Facebook-share-button.png"></a></div>
		</center>
		</div>
	</div>
	<div class="row" style="margin-bottom:15px">
		<div id="new" class="col-lg-9 col-md-9 col-sm-9">
			<center>
			<a class="new-request" href="https://findcharacter.herokuapp.com/index.php">Thdf. prsf;;a fu;kska n,d.uq</a>
			</center>
		</div>
	</div>
</div>

  </body>
  </html>





