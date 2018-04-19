
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Your Koombiyo Character</title>
     <meta property="og:url"           content="https://findcharacter.herokuapp.com/result.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />

  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  
</head>
<body>
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

$characters= array("Hiruni","Priyantha","Adikari","Ananda","Jude","Thenne","Jehan Fernando","Maldeniya","Maldeniya's Dog","Tiran","Ostin aiya","Sudu nangi" );
$k = array_rand($characters);
$v = $characters[$k];

/*print_r($v);*/

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://koombiyoweb.000webhostapp.com/result_new.php");
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"uname='.$user["name"].'&cname='.$v.'");

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$servier_output=curl_exec($ch);
$server_output=json_decode($server_output,true);

echo var_dump($server_output,true);
?> 
 
    <section class="share">
      <p>Share your result with facebook.</p>
    
    <div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result.php" data-layout="button_count" data-size="large" data-mobile-iframe="true">
      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
    </div>
    </section>
 <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=178728269598594&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>
