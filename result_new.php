<?php
session_start();
$u_id=$_SESSION['u_id'];
$u_name=$_SESSION['u_name'];  

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <meta property="og:url"          content="https://findcharacter.herokuapp.com/result_new.php" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Find your koombiyo Character" />
    <meta property="og:description"   content="Koombiyo is a famous teledarama and you may like to check which character in koombiyo looks like you." />
    <meta property="og:image"         content="http://www.koombiyocharacter.me/joined_images/joined_image.jpg" />
  <style>
    body{
        background:url(https://thumbs.dreamstime.com/b/shiny-silver-foil-texture-background-decor-white-grey-metallic-85153852.jpg) no-repeat center;
        background-size:cover;
        }
    img {display: block;
         margin-left: auto;
         margin-right: auto;
         margin-bottom:20px;
        }
    .fb-share-button{
            margin-left: 45%;
            margin-right: 49%;
            /* padding: 0 50px 0 10px; */
            /* background-color: #3b5998; */
            transform: scale(1.5);
            transform-origin: top left;
        }
    .new-request{
        display: block;
        margin-left: 28%;
        margin-top: 2%;
        /* margin-right: 30%; */
        margin-right: 28%;
        padding: 1%;
        background: rgba(12, 159, 213, 0.78);
        color: #fff;
       
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
  <img src="http://www.koombiyocharacter.me/joined_images/joined_image.jpg">
 <?php
//curl_close ($ch);
/***********************************************************************************************/
?>

<div class="fb-share-button" data-href="https://findcharacter.herokuapp.com/result_new.php" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ffindcharacter.herokuapp.com%2Fresult_new.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>  </div>
  <div><a class="new-request" href="https://findcharacter.herokuapp.com/index.php">Click here to Find your answer</a>
    </div>
  </body>
  </html>





