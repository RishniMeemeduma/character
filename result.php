<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Your Koombiyo Character</title>
      <meta property="og:url"           content="https://findcharacter.herokuapp.com/result.php" />
      <meta property="og:type"          content="article" />
      <meta property="og:title"         content="Find your Koombiyo Character" />
      <meta property="og:description"   content="Koombiyo is a populer teledarama now.You may like to find your koombiyo character." />
      <meta property="og:image"         content="https://findcharacter.herokuapp.com/source.jpg" />
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" ></script>
      <script src="bootstrap.min.js"></script>
  
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

/*echo 'Name: ' . $user['name'];*/
$u_id=$user['id'];
  $u_name=$user['name'];
$picture=$user['picture'];
$pc = json_decode($picture);
//echo $pc->url;

/*echo "<img src='$pc->url'>";*/
//var_dump($pc);
/*function array_kshift($characters){
  list($k)=array_keys($characters);
  $r=array($k=>$characters[$k]);
  unset($characters[$k]);
  return $r;

}*/

$characters= array("Hiruni","Priyantha","Adikari","Ananda","Jude","Thenne","Jehan Fernando","Maldeniya","Dog of Maldeniy","Tiran","Ostin aiya","Sudu nangi" );
$k = array_rand($characters);
$v = $characters[$k];

/*print_r($v);
if($v=='Hiruni'){
echo "<img class='c_pic' src='img/hiruni.jpg'>";
}
if($v=='Ostin aiya'){
echo" <img class='c_pic' src='img/Ostin.jpg'>";
}if($v=='Jehan Fernando'){
 echo" <img class='c_pic' src='img/jrhan.jpg'>";
}if($v=='Maldeniya'){
echo" <img class='c_pic' src='img/maldeniya.jpg'>";
}if($v=="Maldeniya's Dog"){
echo" <img class='c_pic' src='img/maldeniay-balla.jpg'>";
}if($v=='Tiran'){
echo" <img class='c_pic' src='img/Tiran.jpg'>";
}if($v=='Sudu nangi'){
echo" <img class='c_pic' src='img/Sudu-Nangi.jpg'>";
}if($v=='Thenne'){
echo" <img class='c_pic' src='img/Thenne.jpg'>";
}if($v=='Jude'){
echo" <img class='c_pic' src='img/jude.jpg'>";
}if($v=='Adikari'){
echo" <img class='c_pic' src='img/adhukari.jpg'>";
}
if($v=='Ananda'){
 echo" <img class='c_pic' src='img/ananda.jpg'>";
}
if($v=='Priyantha'){
 echo" <img class='c_pic' src='img/priyantha.jpg'>";
}
*/



$ch = curl_init();

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

$myimg=$server_output['image'];


?>
 <img src="data:image/png;base64, <?php echo $myimg;?>" alt="Red dot" />
 <?php
curl_close ($ch);
?>

    <section class="share">
      <p>Share your result with facebook.</p>
     <div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    </section>

</body>
</html>





