
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
  .container{background: url(img/ant.jpg) no-repeat top fixed;position: relative;background-size: cover;height: 800px}
  .u_pic{width: inherit;height: inherit;position: absolute;display: block;top: 100px;line-height: 0.9em;}
  .c_pic{width: 150px;height: 200px;position: absolute;right: 180px;top:100px;z-index: 1}
  .u_name{position:absolute; color: #fff;display:block;top: 300px; }
  .c_name{position:absolute; color: #fff;top: 300px;right:100px;}
  h1{position: absolute;color: rgba(255,255,255,0.6);left: calc(50% - 150px);}
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

print_r($v);
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
        <?php echo "<img class='u_pic' src='$pc->url'>";?>
      </div>

      <div class="user_name">
        <p class="u_name"><?php echo $user['name'] ;?></p>
      </div>

    </section>
    <section class="character">

      <div class="character_pic">
        
      </div>

      <div class="character_name">
        <p class="c_name"><?  print_r($v)?></p>
      </div>
    </section>
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