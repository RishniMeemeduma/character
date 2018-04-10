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
  .u_pic{width: 150px;height: 200px;position: absolute;display: block;top: 100px;line-height: 0.9em;}
  .c_pic{width: 150px;height: 200px;position: absolute;right: 30px;top:100px;display: block;}
  .u_name{position:absolute; color: #fff;top: 300px;}
  .c_name{position:absolute; color: #fff;top: 300px;right:100px;}
  h1{position: absolute;color: rgba(255,255,255,0.6);left: calc(50% - 150px);}
  </style>
</head>
<body>
  
  <section class="container">
    <h1>Your Koombiyo Character is</h1>
    <section class="user">

      <div class="user_pic">
        <?php echo "<img class='u_pic' src='$pc->url'>";?>
      </div>

      <div class="user_name">
        <h2 class="u_name"><?php echo $user['name'] ;?></h2>
      </div>

    </section>
    <section class="character">

      <div class="character_pic">
        <?php $pic;?>
      </div>

      <div class="character_name">
        <h2 class="c_name"><? echo print_r($v)?></h2>
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