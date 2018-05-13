<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<style type='text/css'>
			    
		.topic{
					 color: #fff;
					 width: 600px;
					 text-align: center;
					 position: absolute;
					 left: calc(50% - 300px);
					 bottom: inherit;
					 background-color: rgba(255,255,255,0.4);
					 display: block;
					 padding: 20px 20px;
					 border-radius: 20px;
					}
	   
            .button{
					background-color: rgba(255,255,255,0.1);
					position: absolute;
					width: 200px;
					left: calc(50% - 100px);
					top:calc(50% + 120px);
					color: #fff;
					font-size: 1.5em;
					padding: 20px 20px;
					border-radius: 20px;
					text-decoration: none;
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
            a     {
					  color: #fff;
					  text-decoration: none;
                   			}
	.login-image{
					   width:390px;
			}
	#login_to_fb{
					    position: absolute;
   					    top: 414px;
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
	    .login-image{
	      width:199px;
	    }
	    #login_to_fb{
		top:372px;
	    }
          } 
        @media screen and (max-width: 421px){
            img{
              width: 300px;
            }
	#login_to_fb{
		top:296px;
	    }
          } 
		</style>
	</head>
	<body>
    <?php
    session_start();
          require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

      $fb = new \Facebook\Facebook([
        'app_id' => '178728269598594',
        'app_secret' => '34759706ffb61f4b9add1dae533ca766',
        'default_graph_version' => 'v2.2',
        //'default_access_token' => '{access-token}', // optional
      ]);

      // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
         $helper = $fb->getRedirectLoginHelper();
      //   $helper = $fb->getJavaScriptHelper();
      //   $helper = $fb->getCanvasHelper();
      //   $helper = $fb->getPageTabHelper();
         $permissions=['email'];
         $loginUrl =$helper->getLoginUrl('https://findcharacter.herokuapp.com/login-callback.php',$permissions);
        // echo '<a href="'. htmlspecialchars($loginUrl) .'" class="login_to_fb">Log in with Facebook!</a>'
    ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<center>
						<img src="img/ant.png">
					</center>
				</div>
					<?php
						    session_start();
							  require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

						      $fb = new \Facebook\Facebook([
							'app_id' => '178728269598594',
							'app_secret' => '34759706ffb61f4b9add1dae533ca766',
							'default_graph_version' => 'v2.2',
							//'default_access_token' => '{access-token}', // optional
						      ]);

						      // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
							 $helper = $fb->getRedirectLoginHelper();
						      //   $helper = $fb->getJavaScriptHelper();
						      //   $helper = $fb->getCanvasHelper();
						      //   $helper = $fb->getPageTabHelper();
							 $permissions=['email'];
							 $loginUrl =$helper->getLoginUrl('https://findcharacter.herokuapp.com/login-callback.php',$permissions);
							 echo '<div id="login_to_fb" class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-4 col-sm-4 col-xs-4"><a href="'. htmlspecialchars($loginUrl) .'" ><center><img class="login-image" src="https://comedydefensivedriving.com/images2011/fb-sign-in-button.png"></center></a></div>'
						    ?>
					</center>
				</div>
      			</div>
			
		</div>	
	</body>
</html>
