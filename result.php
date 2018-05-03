<?php
/*****************Facebook sdk***************************************************/
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
/***********************************************************************************/
/*************************************Get User Informations from facebook*************/        
/*echo 'Name: ' . $user['name'];*/
$u_id=$user['id'];
  $u_name=$user['name'];
$picture=$user['picture'];
$pc = json_decode($picture);

$_SESSION['u_id']=(string) $u_id;
$_SESSION['u_name']=(string) $u_name;

//echo $pc->url;

/*echo "<img src='$pc->url'>";*/
//var_dump($pc);
/*function array_kshift($characters){
  list($k)=array_keys($characters);
  $r=array($k=>$characters[$k]);
  unset($characters[$k]);
  return $r;

}*/
/****************************************************************************************/
