<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
		  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		    <!--<meta property="fb:app_id"		content="178728269598594" />
		    <meta property="og:url"          content="https://findcharacter.herokuapp.com/index.php" />
		    <meta property="og:type"          content="website" />
		    <meta property="og:title"         content="Find your koombiyo Character" />
		    <meta property="og:description"   content="Koombiyo is a famous teledarama and you may like to check which character in koombiyo looks like you." />
		    <!--<meta property="og:image"         content="http://www.koombiyocharacter.me/joined_images/joined_image967209046767984.jpg" />-->
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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

<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$u_id=$_SESSION['u_id'];
$u_name=$_SESSION['u_name'];  
$time=$_SESSION['time'];

$og_url="http://www.koombiyocharacter.me/joined_images/joined_image$u_id.jpg";
?>     
  
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

<div id="share_button" class="fb-share-button">
    Share
</div>  
  <div class="new"><a class="new-request" href="https://findcharacter.herokuapp.com/index.php">Click here to Find your answer</a>
    </div>
 <script type="text/javascript">
        document.getElementById('share_button').onclick = function() {
                FB.ui(
                {
                    method: 'feed',
                    name: 'Your message',
                    link: 'https://findcharacter.herokuapp.com/result_new.php',
                    picture: '<?php echo $og_url;?>',
                    caption: 'Image caption',
                    href: 'https://findcharacter.herokuapp.com/result_new.php
                    message: 'This is the information that you want to show people.',
                },function(response){});
            }
    </script>
  </body>
  </html>





