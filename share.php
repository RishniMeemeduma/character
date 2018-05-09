<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$u_id=$_GET['u_id'];
$u_name=$_SESSION['u_name'];  
$time=$_SESSION['time'];

$og_url="http://www.koombiyocharacter.me/joined_images/joined_image$u_id.jpg";
$fb = new Facebook\Facebook([
   'app_id' => '178728269598594', // Replace {app-id} with your app id
  'app_secret' => '34759706ffb61f4b9add1dae533ca766',
  'default_graph_version' => 'v2.2',
  ]);

$linkData = [
  'link' => 'https://findcharacter.herokuapp.com',
  'message' => 'User provided message',
  ];

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post('/me/feed', $linkData, $_SESSION['fb_access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();

//echo 'Posted with id: ' . $graphNode['id'];

?>
