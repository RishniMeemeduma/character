<?php

session_start();
require 'vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '178728269598594',
  'app_secret' => '34759706ffb61f4b9add1dae533ca766',
  'default_graph_version' => 'v2.2',
  ]);

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,picture',$_SESSION['fb_access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

echo 'Name: ' . $user['name'];
$picture=$user['picture'];
$pc = json_decode($picture);
//echo $pc->url;

echo "<img src='$pc->url'>";
//var_dump($pc);
/*function array_kshift($characters){
  list($k)=array_keys($characters);
  $r=array($k=>$characters[$k]);
  unset($characters[$k]);
  return $r;

}*/

?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://findcharacter.herokuapp.com/result.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://findcharacter.herokuapp.com/destination.jpg" />
</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=178728269598594&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
</body>
</html>
<?php
require 'vendor/autoload.php';
$characters= array("Hiruni","Priyantha","Adikari","Ananda","Jude","Thenne","Jehan Fernando","Maldeniya","Maldeniya's Dog","Tiran","Ostin aiya","Sudu nangi" );
$k = array_rand($characters);
$v = $characters[$k];

print_r($v);
if($v=='Hiruni'){
$pic=" <img src='img/hiruni.jpg'>";
}
if($v=='Ostin aiya'){
 echo" <img src='img/Ostin.jpg'>";
}if($v=='Jehan Fernando'){
 echo" <img src='img/jrhan.jpg'>";
}if($v=='Maldeniya'){
 echo" <img src='img/maldeniya.jpg'>";
}if($v=="Maldeniya's Dog"){
 echo" <img src='img/maldeniay-balla.jpg'>";
}if($v=='Tiran'){
 echo" <img src='img/Tiran.jpg'>";
}if($v=='Sudu nangi'){
 echo" <img src='img/Sudu-Nangi.jpg'>";
}if($v=='Thenne'){
 echo" <img src='img/Thenne.jpg'>";
}if($v=='Jude'){
 echo" <img src='img/jude.jpg'>";
}if($v=='Adikari'){
 echo" <img src='img/adhukari.jpg'>";
}
if($v=='Ananda'){
 echo" <img src='img/ananda.jpg'>";
}
if($v=='Priyantha'){
 echo" <img src='img/priyantha.jpg'>";
}
// Create image
$image = new \NMC\ImageWithText\Image('ant.jpg');

// Add text to image
$text1 = new \NMC\ImageWithText\Text('Your Facebook Character ', 3, 25);
$text1->align = 'left';
$text1->color = 'FFFFFF';
$text1->font = 'fonts/Ubuntu-Medium.ttf';
$text1->lineHeight = 36;
$text1->size = 30;
$text1->startX = 300;
$text1->startY = 80;
$image->addText($text1);

// Add more character image
$image1 = new \NMC\ImageWithText\Image($pic);
$image1->align = 'left';
$image1->lineHeight = 20;
$image1->size = 35;
$image1->startX = 40;
$image1->startY = 300;
$image->addText($image1);
// Add more text to image
$text2 = new \NMC\ImageWithText\Text($v, 1, 30);
$text2->align = 'left';
$text2->color = 'FFFFFF';
$text2->font = 'fonts/Ubuntu-Medium.ttf';
$text2->lineHeight = 20;
$text2->size = 35;
$text2->startX = 40;
$text2->startY = 300;
$image->addText($text2);

$text2 = new \NMC\ImageWithText\Text($v, 1, 30);
$text2->align = 'left';
$text2->color = 'FFFFFF';
$text2->font = 'fonts/Ubuntu-Medium.ttf';
$text2->lineHeight = 20;
$text2->size = 35;
$text2->startX = 800;
$text2->startY = 300;
$image->addText($text2);

// Render image
$image->render('destination.jpg');

?>
<?php
header("Location:https://findcharacter.herokuapp.com/share.php");
?>