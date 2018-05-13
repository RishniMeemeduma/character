<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css"> 
		
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
         $permissions=['email','publish_actions'];
         $loginUrl =$helper->getLoginUrl('https://findcharacter.herokuapp.com/login-callback.php',$permissions);
        // echo '<a href="'. htmlspecialchars($loginUrl) .'" class="login_to_fb">Log in with Facebook</a>'
    ?>
		<div class="container" >
			<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10">
			<center>
				<img src="ant.jpg">
				<h1 class="topic">Find your Koombiyo Character</h1>
				<a href="'. htmlspecialchars($loginUrl) .'" class="login_to_fb">Log in with Facebook</a>
			</center>
			</div>
			</div>
		</div>	
	</body>
</html>
