<?php
session_start();
$u_id=$_GET['u_id'];
$u_name=$_SESSION['u_name'];  
$time=$_SESSION['time'];

$og_url="http://www.koombiyocharacter.me/joined_images/joined_image$u_id.jpg";

require_once __DIR__ . '/vendor/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '178728269598594', // Replace {app-id} with your app id
  'app_secret' => '34759706ffb61f4b9add1dae533ca766',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getCanvasHelper();
$permissions = ['email', 'publish_actions']; // optional
try {
	if (isset($_SESSION['facebook_access_token'])) {
		$accessToken = $_SESSION['facebook_access_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 	// When Graph returns an error
 	echo 'Graph returned an error: ' . $e->getMessage();
  	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
  	exit;
 }
if (isset($accessToken)) {
	if (isset($_SESSION['facebook_access_token'])) {
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} else {
		$_SESSION['facebook_access_token'] = (string) $accessToken;
	  	// OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		// Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	
	// validating the access token
	try {
		$request = $fb->get('/me');
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		if ($e->getCode() == 190) {
		 	unset($_SESSION['facebook_access_token']);
			$helper = $fb->getRedirectLoginHelper();
			$loginUrl = $helper->getLoginUrl('https://apps.facebook.com/APP_NAMESPACE/', $permissions);
			echo "<script>window.top.location.href='".$loginUrl."'</script>";
			exit;
		}
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}
	
	// posting on user timeline using publish_actins permission
	try {
		// message must come from the user-end
		$data = ['message' => 'testing...'];
		$request = $fb->post('/me/feed', $data);
		$response = $request->getGraphNode()->asArray;
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	echo $response['id'];

  	// Now you can redirect to another page and use the
  	// access token from $_SESSION['facebook_access_token']
} else {
	$helper = $fb->getRedirectLoginHelper();
	$loginUrl = $helper->getLoginUrl('https://apps.facebook.com/APP_NAMESPACE/', $permissions);
	echo "<script>window.top.location.href='".$loginUrl."'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find your koombiyo Character</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <meta property="og:url"          content="https://findcharacter.herokuapp.com/result_new.php" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Find your koombiyo Character" />
    <meta property="og:description"   content="Koombiyo is a famous teledarama and you may like to check which character in koombiyo looks like you." />
    <meta property="og:image:width" content="1200" >
    <meta property="og:image:height" content="630" >
    <meta property="og:image"         content="<?php echo $og_url; ?>" />
  <style>
    body{
        background:url(https://thumbs.dreamstime.com/b/shiny-silver-foil-texture-background-decor-white-grey-metallic-85153852.jpg) no-repeat center;
        background-size:cover;
        }
    img {
        /* margin-left: auto;
         margin-right: auto;
         margin-bottom:20px;*/
         margin-top: 80px;
         position: relative;
         margin-left: 35px;
        }
    .fb-share-button{
            /*margin-left: 45%;
            margin-right: 49%;
            /* padding: 0 50px 0 10px; */
            /* background-color: #3b5998; */
           /* transform: scale(1.5);
            transform-origin: top left;*/
          transform: scale(1.5);
          transform-origin: top left;
          position: absolute !important;
          top: 162px;
          left: 71%;

        }
    .new-request{
        display: block;
        /* margin-left: 28%; */
        margin-top: 2%;
        /* margin-right: 30%; */
        /* margin-right: 28%; */
        /* width: 171%; */
        padding: 12px 20px;
        background: rgba(12, 159, 213, 0.78);
        color: #fff;
        text-align: center;
        font-size: 17px;
        
        }
    .new-request::after{
        content:'  >>';    
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
    </style>
</head>
<body>

   <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=178728269598594&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

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
  <img src="<?php echo $og_url;?>">
 <?php
//curl_close ($ch);
/***********************************************************************************************/
?>

<div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result_new.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult_new.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share Your Result via Facebook</a></div>  </div>
  <div class="new"><a class="new-request" href="https://findcharacter.herokuapp.com/index.php">Click here to Find your answer</a>
    </div>
  </body>
  </html>





