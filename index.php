<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Find your Character</title>
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
                  bottom: inherit;
                  background-color: rgba(255,255,255,0.4);
                  display: block;
                  padding: 20px 20px;
                  border-radius: 20px;
                  }
            .button{background-color: rgba(255,255,255,0.1);
            			position: absolute;
                  width: 200px;
            			left: calc(50% - 100px);
            			top:calc(50% + 120px);
            			color: #fff;
            			font-size: 1.5em;
            			padding: 20px 20px;
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
            a     {
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
    <script type="text/javascript">
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '178728269598594',
            cookie     : true,
            xfbml      : true,
            version    : '5'
          });
            
          FB.AppEvents.logPageView();   
            
        };

        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
     
    </script>
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

      <a class="button" href="result.php">Click here</a>
			
		</div>	
	</body>
</html>