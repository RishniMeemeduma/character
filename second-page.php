<?php
session_start();
$u_id=$_SESSION['u_id'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
		    <meta property="og:url"          content="https://findcharacter.herokuapp.com/second-page.php" />
		    <meta property="og:type"          content="website" />
		    <meta property="og:title"         content="Find your koombiyo Character" />
		    <meta property="og:description"   content="Koombiyo Is a famous teledrama.Do you like to find out your koombiyo character." />
		    <meta property="og:image"         content=""http://www.koombiyocharacter.me/joined_images/joined_image<?php echo $u_id ?>.jpg"" />
  <style>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<style type='text/css'>
		body       {background: url(./ant.jpg)no-repeat top ;
			    background-size: inherit;
			    position: relative ; 
			    width:100% ;} 
			    
		.topic{ color: #fff;
		  width: 600px;
                  text-align: center;
                  position: absolute;
                  left: calc(50% - 300px);
                  top: 67px;
                  background-color: rgba(255,255,255,0.4);
                  display: block;
                  padding: 20px 20px;
                  border-radius: 20px;
                  }
	    .login_to_fb{
		  position: absolute;
		  display: block;
		  left:calc(50% - 100px);
		  top: 285px;
		  background-color: #3b5998;
		  padding: 20px 30px;
		  border-radius: 20px;
			}
	    .login_to_fb:hover{
		    text-decoration:none;
		    color:#fff;
			}
            .button{
		  background-color: green;
            	  position: absolute;
                  width: inherit;
            	  left: calc(50% - 180px);
            	  top:550px;
            	  color: #fff;
            	  font-size: 1.5em;
            	  padding: 20px 50px;
            	  border-radius: 20px;
            	  text-decoration: none;
		}
           .button::after{
           	 content: '>>';
           	 padding-left: 5px;
                 text-decoration: none;
           	 transition:padding-left;
		}
            .button:hover{
                 text-decoration: none;
                 color: #fff;
                  }
            .button:hover::after{
           	 padding-left: 3px;
                 }
            a   {
                 color: #fff;
                 text-decoration: none;
                }

           	/*form	{width: 600px;
           				display: block;
           				position: absolute;
           				background-color: #fff;
           				left: 50%;
           				top: 150px;
           				padding: 20px 20px;
    					    border-radius: 10px;

           				}
           	.question	{
           				color: #000;
           				font-size: 1.5em;
           				}
           	.question ~ input[type="radio"]{
           				
           				margin-right: 5px;
           				}*/
		</style>
	</head>
	<body>
   
		<div >
			<h1 class="topic">Find your Koombiyo Character</h1>
			<!-- <form action="result.php" method="POST">
				<label class="question">If There are two people who will you chose</label><br>
				<input type='radio' name="choice" value="Knife" checked><label class=''>Knife</label><br>
				<input type='radio' name="choice" value="Gun"><label>Gun</label><br>
				<input type='radio' name="choice" value="Crackers"><label>Crackers</label><br>
				<input type='radio' name="choice" value="Run"><label>Run</label><br>
				<input type="submit" class="button" name="submit" value="Click here">
			</form> -->

      <a class="button" href="result_new.php">Click here to find your answer</a>
			
		</div>	
	</body>
</html>


