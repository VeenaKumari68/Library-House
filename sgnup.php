<?php include('../university/config/constants.php'); ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Sign Up</title>
	<link rel="icon" type="image/png" href="images/logo.png" sizes="200x200">
	<link href="sgnup.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=play" rel="stylesheet">
	<style>
	#msg{
		visibility:hidden;/*hidden*/
		min-width:250px;
		background-color: yellow;
		color: black;
		text-align: center;
		border-radius: 2px;
		padding: 16px;
		position: fixed;
		z-index: 1;
		right: 35%;
		top: 30px;
		font-size: 17px;
		margin-right:30px;
	}

	#msg.show{
		visibility: visible;
		transition: 0.2s;
		-webkit-animation:fadein 0.5s ,fadeout 0.5s 2.5s;
		animation:fadein 0.5s, fadeout 0.5s 2.5s; 
	}
	@-webkit-keyframesfadein{
		from{top:0;opacity: 0;}
		to{top: 30px;opacity: 1;}
	}
	@keyframes fadein{
		from{top:0;opacity: 0;}
		to{top: 30px;opacity: 1;}
	}
	@-webkit-keyframesfadeout{
		from{top:30;opacity: 1;}
		to{top: 0px;opacity: 0;}
	}
	@keyframes fadeout{
		from{top:30;opacity: 1;}
		to{top: 0px;opacity: 0;}
	}

	.show{
		visibility: visible;
	}




	</style>
</head>
<body>
	<div class="signup">
		<form>
					<h2 style="color=white" align="center">Sign Up</h2>
			<input type="text" name="username" placeholder="Name"><br><br>
			<input type="text" name="email" placeholder="Email"><br><br>
			<input type="password" name="pass" placeholder="Password"><br><br>
			<input type="password" name="pass" placeholder="Confirm Password"><br><br>
			<button type="button" value="Sign Up" onclick="myFunction();">Login</button>
			<div id="msg" >Congratulations, Successfully Signed Up!!!</div>
           

           <script>
           	function myFunction(){
           	document.getElementById('msg').classList.add("show");;
           	}
            function toPage() 
            {  
            window.location="../university/index.php"; 
            } 
            function myFunction(){ 
            //redirect after 5 seconds for i min pass 60000
            setTimeout('toPage()', 1000);
            }
           </script>

            Already have an account? <a href="logn.php">&nbsp;Log In</a>

			</form>
		</div>
	

    	<style type="text/css">
        body{
        background-image:url(images/bgimg.jpg);
        font-family: "Trebuchet MS";
        color: #fff
        background-size: cover;
        }
    .logo{
	    margin-top: -80px;
	    margin-left: 25px;
        }
    .signup{
    	border-radius: 5px;
    	background: rgba(44,62,80,0.7);
    	padding: 40px;
    	width: 250px;
    	margin:auto;
    	margin-top: 80px;
    	height: 400px;
    	margin-left: 500px;
    	margin:0 auto;
    	margin-top: 90px;

    }
    form{
    	width:240px;
    	text-align: center;
    }
    input{
    width:240px;
	text-align: center;
	background-color: transparent;
	border:none;
	border-bottom: 1px solid #fff;
	font-family: "Trebuchet MS";
	font-size: 16px; 
	font-weight: 200px;
	padding: 10px 0;
	outline:none;
	color:#fff;
    }


input [type=button]{
border:none;
width:190px;
background:white;
color:#000;
font-size:16px;
line-height:25px;
padding:10px 0;
border-radius:15px
font-family: "Trebuchet MS";
cursor: pointer;/*cursor*/

}

input[type=button]:hover{
	color:#fff;
	background-color:black;
	border: 1px solid white;

}
a{
	text-decoration: none;
	font-family: "Trebuchet MS";
	color: yellow;
}
h2{
	color:#000;

}
::placeholder {
	color: aliceblue;
	opacity:0.8;
}
button{
	margin: 30px 0 30px 0 ;
	margin-left: 25px;
	padding:10px 0;
	height: 45px;
	width: 200px;
	font-size: 20px;
	color: white;
	outline: none;
	font-family: "Trebuchet MS";
	border:none;
	cursor: pointer;
	font-weight: bold;
	background: black;
	border-radius: 3px;
}
</style>
</body>
</html>