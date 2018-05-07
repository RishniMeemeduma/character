
<?php
session_start();
$u_id=$_SESSION['u_id'];
$u_name=$_SESSION['u_name'];  

/********************* Randomly select Character form php********************************/        
$characters= array("Hiruni","Priyantha","Adikari","Anjana","Meesha","Ananda","Jude","Thenne","Jehan","Maldeniya","Dog of Maldeniy","Tiran","Ostin aiya","Sudu nangi" );
$k = array_rand($characters);
$v = $characters[$k];
/****************************************************************************************/
/*****************************Using Curl Send and get the Image from webhost*****************/
$ch = curl_init();
      
curl_setopt($ch, CURLOPT_URL,"http://koombiyoweb.000webhostapp.com/result_new.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"uname=$u_name&cname=$v&id=$u_id&time=time()");
// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));
// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);  //response
$server_output =json_decode($server_output, true);
//echo var_dump($server_output);
$myimg=$server_output['image'];


curl_close ($ch);
/***********************************************************************************************/
header("Location:second-page.php");
?>


