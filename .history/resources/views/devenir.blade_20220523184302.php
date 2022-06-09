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
	
	@keyframes tawekou {
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
            
            <img src="/img/blood.jpg" alt="">
            <div class="mask"></div>
        </div>
        <div class="ontop">
            
            <a href="index.php"><input type="button" value="Alertes"></a>
            <a href="/devenir"><input type="button" value="Devenir donneur"></a>
            <a href="#"><input type="button" value="A propos de nous"></a>
            <a href="contact.php"><input type="button" value="Contact"></a><br>
            
        </div>
        <hr>
        <h1>" Pas besoin de pouvoir pour être un héro "</h1>
        <div class="bouki">
            <div>
                <h2><blockquote></blockquote></h2>
                <hr class="trait">
                    <form action="welcome" method="POST">
						@csrf
                        <label id="reponse" for="oui">Avez-vous fait une fois un don ?</label>
                        <input type="radio" name="reponse" id="oui" value="oui"> Oui
						<label id="reponse" for="non">Avez-vous fait une fois un don ?</label>
                        <input type="radio" name="reponse" id="non" value="non"> Non
                        <span id="error00"></span><br><br>
    
                        <label id="sexe">Sexe</label>
                        <input type="radio" name="sexe" id="masculin"> Masculin
                        <input type="radio" name="sexe" id="feminin"> Feminin
                        <span id="error0"></span><br><br>
    
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom.."  class="largeur" >
                        <span  id="error"></span><br>
    
                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom.." class="largeur" >
                        <span  id="error1"></span><br>
    
                        <label for="telephone">Téléphone</label>
                        <input type="text" id="telephone" name="telephone" placeholder="Votre numéro de Téléphone" class="largeur" >
                        <span  id="error2"></span><br>
    
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" id="date_naissance" name="date_naissance" class="largeur" >
    
                        <label for="email">e-mail</label>
                        <input type="email" id="email" name="email" class="largeur" placeholder="Ex: nom@gmail.com">
                        <span id="error5"></span><br>
    
                        <label for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" placeholder="Votre adresse" class="largeur" >
                        <span  id="error3"></span><br>
    
                        <label for="profession">Profession</label>
                        <input type="text" id="profession" name="profession" placeholder="Votre profession" class="largeur">
                        <span  id="error4"></span><br>
    
                        <label for="groupe_sanguin">Groupe Sanguin</label>
                        <select id="groupe_sanguin" name="groupe_sanguin" >
                            <option value="inconnue">inconnu(e)</option>
                            <option value="groupAplus">A+</option>
                            <option value="groupAmoins">A-</option>
                            <option value="groupBplus">B+</option>
                            <option value="groupBmoins">B+</option>
                            <option value="groupABplus">AB+</option>
                            <option value="groupABmoins">AB-</option>
                            <option value="groupOplus">O+</option>
                            <option value="groupOmoins">O-</option>
                        </select>
                         
                         <label for="region">Region</label>
                        <select id="region" name="region" >
                            <option value="dakar">Dakar</option>
                            <option value="saint-Louis">Saint-Louis</option>
                            <option value="thiès">Thiès</option>
                            <option value="louga">Louga</option>
                            <option value="ziguinchor">Ziguinchor</option>
                            <option value="matam">Matam</option>
                            <option value="kolack">Kaolack</option>
                            <option value="kédougou">Kédougou</option>
                            <option value="kolda">Kolda</option>
                            <option value="kaffrine">Kaffrine</option>
                            <option value="sédhiou">Sédhiou</option>
                            <option value="podor">Podor</option>
                            <option value="tambacounda">Tambacounda</option>
                            <option value="diourbel">Diourbel</option>
                        </select>
                      
                        <input type="submit" value="VALIDER">	
                </form>
            </div>
        </div>
        {{-- <script type="text/javascript" src="index.js"></script> --}}
    </body>
