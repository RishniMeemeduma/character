
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>Your Koombiyo Character</title>
     <meta property="og:url"           content="https://findcharacter.herokuapp.com/result.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://findcharacter.herokuapp.com/destination.jpg" />
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <style type="text/css">
    .container{
      /*background: url(img/ant.jpg) no-repeat top ;*/
      background-color :#000;
      position: relative;
      background-size: cover;
      height: -webkit-fill-available;
      width: 50%;
      height:500px;
      }
    .u_pic{
      width: inherit;
      height: inherit;
      position: absolute;
      display: block;
      top: calc(50% - 107px);
      left: calc(25% - 126px);
      line-height: 0.9em;
      }
    .c_pic{
      width: 150px;
      height: 200px;
      position: absolute;
      left: calc(45%);
      top: 126px;
      z-index: 1
      }
    .u_name{
      position:absolute;
      color: #fff;
      display:block;
      font-weight: bold;
      top: calc(45%);
      font-size: x-large;
      
      }
    .c_name{
      position:absolute;
      color: #fff;
      top: calc(45%);
      left: calc(65%);
      font-weight: bold;
      font-size: x-large;
      padding: 3%;
      background-color: darkred;
      }
    h1{
      position: absolute;
      color: rgba(255,255,255,0.6);
      left: calc(25% - 55px);
      top: 21px;
    }
    .description{
      color: #4abd13;
      position: absolute;
      bottom: 5%;
      font-size: 1.5em;
      /* left: 15%; */
      background-color: white;
      width: -webkit-fill-available;
      left: 0px;
      padding: 3%;
    }
  </style>
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

?> 
  <section class="container">
    <h1>Your Koombiyo Character is</h1>
    <section class="user">

      <div class="user_pic">
        <?php //echo "<img class='u_pic' src='$pc->url'>";?>
      </div>

      <div class="user_name">
        <p class="u_name"><?php echo $user['name'] ;?></p>
      </div>

    </section>
    <section class="character">

      <div class="character_pic">
        
      </div>
      <div class="description">
        <p><?php echo $user['name']?> You are absolutely like <?php print_r($v);?></p>
      </div>
      <div class="character_name">
        <p class="c_name"><?  print_r($v)?></p>
      </div>
    </section>
    </section>
    <div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result.php" data-layout="button_count" data-size="large" data-mobile-iframe="true">
      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
    </div>
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
