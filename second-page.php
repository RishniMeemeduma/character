<?php
session_start();
$u_id=$_SESSION['u_id'];
$timing=$_SESSION['timing'];
//echo $u_id;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<style type='text/css'>
		
			    
		.topic{ color: #fff;
		  width: 600px;
                  text-align: center;
                  position: absolute;
                  left: calc(50% - 300px);
                  top: 67px;
                  background-color: rgba(255,255,255,0.4);
                  display: block;
                  padding: 20px 20px;
                  border-radius: 20px;
                  }
	    .login_to_fb{
		  position: absolute;
		  display: block;
		  left:calc(50% - 100px);
		  top: 285px;
		  background-color: #3b5998;
		  padding: 20px 30px;
		  border-radius: 20px;
			}
	    .login_to_fb:hover{
		    text-decoration:none;
		    color:#fff;
			}
            .button{
		  background-color: green;
            	  margin-top: 24px;
                  width: inherit;
            	  
            	
            	  color: #fff;
            	  font-size: 1.5em;
            	  padding: 20px 50px;
            	  border-radius: 20px;
            	  text-decoration: none;
		}
	   #link {
		   margin-top:24px;
			}
           .button::after{
           	 content: '>>';
           	 padding-left: 5px;
                 text-decoration: none;
           	 transition:padding-left;
		}
            .button:hover{
                 text-decoration: none;
                 color: #fff;
                  }
            .button:hover::after{
           	 padding-left: 3px;
                 }
            a   {
                 color: #fff;
                 text-decoration: none;
                }
	 img			{
					vertical-align: middle;
					margin-top: 13px;
					width: 560px;
			}
	 @media screen and (max-width: 992px){
		    img{
		      width:719px;
		    }
		    .container{
		      margin-top: 41px;
		    }
		  }
	@media screen and (max-width: 760px){
		    img{
		      width: 584px
		    }
		  } 
	@media screen and (max-width: 609px){
		    img{
		      width: 400px;
		    	}
		   .button{
			top:372;
			padding: 12px 36px;
			}
		   
		  }
	@media screen and (max-width: 430px){
		  .button{
			padding: 7px 44px;
			font-size:1.3em;
			}
          } 
	@media screen and (max-width: 421px){
		    img{
		      width: 300px;
		    }
	
		.button{
		    padding: 5px 18px;
		    font-size:1.0em;
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
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-4 col-xs-12">
					<center>
						<img src="img/ant.png">
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" id="link">
					<center>
		  			<a class="button" href="result_new.php?img=http://www.koombiyocharacter.me/joined_images/joined_image<?php echo $u_id.$timing ?>.jpg">Click here to find your answer</a>
					</center>
				</div>
			</div>	
		</div>	
	</body>
</html>


