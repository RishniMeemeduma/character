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
       	 /*background:url(https://thumbs.dreamstime.com/b/shiny-silver-foil-texture-background-decor-white-grey-metallic-85153852.jpg) repeat center;
       	*/
		background-color:black;
		background-size:cover;
	
        }
	.container{
		background-color:white;
		margin-top:10px;
	}
   	 #image {
         	margin-top: 40px;
		
        }
	#container{
	  margin-top: 70px;
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
	border-radius:25%;
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
    <!--**************************Google adsense advertisements**************************-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-7327566083992660",
	    enable_page_level_ads: true
	  });
	</script>
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
	    
	     <nav class="navbar navbar-default navbar-fixed-top small">
		    <div class="container" >
		      <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="https://www.srifunapp.com"><img src="" alt="CreativeApp">
			</a>
		      </div>
		       <div id="navbar1" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="https://findcharacter.herokuapp.com/">Home</a></li>
			  <li><a href="https://findcharacter.herokuapp.com/about.php">About</a></li>
			  <!--<li><a href="https://www.facebook.com/v2.8/dialog/oauth?client_id=676289399391580&state=67149cfb92121c08730dbf1c5d13a1b9&response_type=code&sdk=php-sdk-6.0-dev&redirect_uri=https%3A%2F%2Fwww.srifunapp.com%2Ffb%2Flogin.php&scope=email%2Cuser_friends%2Cuser_photos"><span class="glyphicon glyphicon-user"></span> <strong>Login</strong></a></li>
			--></ul>
		      </div>
		    
    		  </div>
   
 		 </nav>
	
		<div class="container" id='container'>
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
					   href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult_new.php%3Fimg=<?php echo $img?>&src=sdkpreparse" >
					<img src="img/Facebook-share-button.png"></a></div>
				</center>
				</div>
			</div>
			<div class="row" style="margin-bottom:15px">
				<div id="new" class="col-lg-9 col-md-9 col-sm-9">
					<center>
					<a class="new-request" href="https://findcharacter.herokuapp.com/index.php">f.aula .y,d Thd;a ljqre jf.ao n,uq fu;kska</a>
					</center>
				</div>
			</div>
		</div>

  </body>
  </html>





