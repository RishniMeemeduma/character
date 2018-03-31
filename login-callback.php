<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '178728269598594', // Replace {app-id} with your app id
  'app_secret' => '34759706ffb61f4b9add1dae533ca766',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
/*echo '<h3>Access Token</h3>';
var_dump($accessToken->getValue());*/

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
/*echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);*/

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('178728269598594'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
    exit;
  }

  /*echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());*/
}

$_SESSION['fb_access_token'] = (string) $accessToken;

// User is logged in with a long-lived access token.
// You can redirect them to a members-only page.
//header('Location: https://example.com/members.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<style type='text/css'>
		body       {background: url(./ant.jpg)no-repeat top ;
			    background-size: inherit;
			    position: relative ; 
			    width:100% ;} 
			    
		.topic{ color: #fff;
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
            .button{background-color: rgba(255,255,255,0.1);
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

           	/*form	{width: 600px;
           				display: block;
           				position: absolute;
           				background-color: #fff;
           				left: 50%;
           				top: 150px;
           				padding: 20px 20px;
    					    border-radius: 10px;

           				}
           	.question	{
           				color: #000;
           				font-size: 1.5em;
           				}
           	.question ~ input[type="radio"]{
           				
           				margin-right: 5px;
           				}*/
		</style>
	</head>
	<body>
   
		<div >
			<h1 class="topic">Find your Koombiyo Character</h1>
			<!-- <form action="result.php" method="POST">
				<label class="question">If There are two people who will you chose</label><br>
				<input type='radio' name="choice" value="Knife" checked><label class=''>Knife</label><br>
				<input type='radio' name="choice" value="Gun"><label>Gun</label><br>
				<input type='radio' name="choice" value="Crackers"><label>Crackers</label><br>
				<input type='radio' name="choice" value="Run"><label>Run</label><br>
				<input type="submit" class="button" name="submit" value="Click here">
			</form> -->

      <a class="button" href="result.php">Click here</a>
			
		</div>	
	</body>
</html>

