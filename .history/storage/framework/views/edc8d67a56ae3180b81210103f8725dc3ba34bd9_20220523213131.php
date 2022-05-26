<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Devenir Donneur</title>
	<link rel="stylesheet" href="resources/css">
	<style>
		*{
		margin: 0;
		padding: 0;
		font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
	}
	
	html{
		scroll-behavior: smooth;
	}
	
	.top{
		height: 100vh;
		overflow: hidden;
	}
	hr{
		width: 25%;
		transform: translateY(-15cm);
		margin: auto;
		border: solid 2px #f00020;
		animation-name: tawekou;
		animation-duration: 2s;
		animation-fill-mode: forwards;
	}
	
	@keyframes  tawekou {
		0%{
			width: 0%;
		}
		60%{
			width: 12.5%;
		}
		100%{
			width: 25%;
		}
	}
	
	h1{
		transform: translateY(-14cm);
		font-size: 50px;
		color: white;
		text-align: center; 
		font-style: italic; 
	}
	
	body{
		box-sizing: border-box;
		overflow-y: scroll ;
		/*text-align: center;*/
	}
	
	
	
	.ontop input{
		border: none;
		height: 1cm;
		width: 5cm;
		font-size: large;
		background: transparent;
		color: white;
	}
	
	.ontop{
		text-align: center;
		float: center;
	
		transform: translateY(-100vh);
	  
	}
	
	
	.ontop input:hover{
		color:white;
		background: rgb(218,0,0);
		background: #f00020;
		transform: scale(1.1);
		transition: 0.3s;
	}
	
	.mask{
		background: #000;
		height: 100vh;
		opacity: 0.3;
		transform: translateY(-155vh);
		z-index: 2;
	}
	
	.top img {
		z-index: 1;
		width:100vw;
		transform: translateY(-3cm);
		opacity: 0.9;
	}
	
	.bouki{
		z-index: 10;
		transform: translateY(-40vh);
		height: 160vh;
		box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;
		width: 90%;
		margin: auto;
		background: white;
		border-top-left-radius: 20px;
		border-top-right-radius: 20px;
	
	}
	
	h2{
		margin-bottom: 20px;
		text-align: center;
		color: #f00020;
	}
	
	.bouki div{
		transform: translateY(10vh);
		height: 440.19px;
	}
	
	form{
		width: 45%;
		margin: auto;
	}
	
	
	.largeur, select, textarea {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}
	
	input[type=submit] {
	  width: 100%;
	  background-color: #f00020;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 50px;
	  cursor: pointer;
	}
	
	input[type=submit]:hover {
	  background-color: #45a049;
	}
	
	#sexe, #reponse {
		padding-right: 10px;
	}
	
	.bouki div hr{
		transform: none;
		width: auto;
	}
	
	.bouki div p{
		text-align: center;
		padding-top: 20px;
		padding-bottom: 50px;
	}
	
	.trait{
		margin-bottom: 50px;
	}
	
	</style>
</head>
<body>
    <div class="top">
        <img class="image" src="/img/blood.jpg" alt="">
        <div class="mask"></div>
    </div>
    <div class="ontop">
        
        <a href="index.php"><input type="button" value="Accueil"></a>
        <a href="/devenir"><input type="button" value="Devenir donneur"></a>
        <a href="#"><input type="button" value="A propos de nous"></a>
        <a href="contact.php"><input type="button" value="Contact"></a><br>
    
    </div>
    <hr>
    <h1>Plateforme Digitale De<br> Don De Sang</h1>
    <div class="bouki"></div> 
</body><?php /**PATH /Users/usermacbook/Desktop/savelife/resources/views/welcome.blade.php ENDPATH**/ ?>