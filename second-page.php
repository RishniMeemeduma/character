<?php
session_start();
$u_id=$_SESSION['u_id'];
$timing=$_SESSION['timing'];
//echo $u_id;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<style type='text/css'>
		
			    
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
            	  top:500px;
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

		</style>
	</head>
	<body>
   
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-md-4 col-xs-12">
					<center>
						<img src="img/ant.png">
					</center>
				</div>
				<div class="col-lg-offset-2 col-sm-offset-2 col-md-offset-2 col-xs-offset-2 ">
		  			<a class="button" href="result_new.php?img=http://www.koombiyocharacter.me/joined_images/joined_image<?php echo $u_id.$timing ?>.jpg">Click here to find your answer</a>
				</div>
			</div>	
		</div>	
	</body>
</html>


