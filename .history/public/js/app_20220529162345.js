var condition = /^[a-zA-Z ]{2,}$/;

var condition1 = /^[0-9]{9,9}$/;

var condition2 = /^[a-zA-Z-0-9 ]{2,}$/;


var reponseId = document.getElementById('reponse');
		reponseId.addEventListener('mouseover',function() {
			var erreur00 = document.getElementById('error00');
			erreur00.innerHTML = "<img src='/images/info.png'> Votre reponse";
			var ouiId = document.getElementById('oui');
			var nonId = document.getElementById('non');
			ouiId.addEventListener('click',function () {
				erreur00.innerHTML = "<img src='/images/good.png'>";
			});
			nonId.addEventListener('click',function () {
				erreur00.innerHTML = "<img src='/images/good.png'>";
			});
			});

var sexeId = document.getElementById('sexe');
		sexeId.addEventListener('mouseover',function() {
			var erreur0 = document.getElementById('error0');
			erreur0.innerHTML = "<img src='/images/info.png'> Votre sexe";
			var masculinId = document.getElementById('masculin');
			var femininId = document.getElementById('feminin');
			masculinId.addEventListener('click',function () {
				erreur0.innerHTML = "<img src='/images/good.png'>";
			});
			femininId.addEventListener('click',function () {
				erreur0.innerHTML = "<img src='/images/good.png'>";
			});
			});
		
var nomId = document.getElementById('nom'); 
		var mesErreurs = document.getElementById('error');
			
			nomId.addEventListener("focus",function(){
				var mesErreurs = document.getElementById("error");
				mesErreurs.innerHTML = "<img src='/images/info.png'> Le nom doit contenir au moins deux caractères";
				
				nomId.addEventListener("input",function(){
				if(condition.test(this.value)) {
					mesErreurs.innerHTML = "<img src='/images/good.png'>";
				} 
				else{
					mesErreurs.innerHTML = "<img src='/images/bad.png'> Le nom doit contenir au moins deux caractères";
				}
				});
			});

var prenomId = document.getElementById('prenom'); 
		var mesErreurs1 = document.getElementById('error1');
		prenomId.addEventListener("focus",function(){
				var mesErreurs1 = document.getElementById("error1");
				mesErreurs1.innerHTML = "<img src='/images/info.png'> Le prenom doit contenir au moins deux caractères";
				
				prenomId.addEventListener("input",function(){
				if(condition.test(this.value)) {
					mesErreurs1.innerHTML = "<img src='/images/good.png'>";
				} 
				else{
					mesErreurs1.innerHTML = "<img src='/images/bad.png'> Le prenom doit contenir au moins deux caractères";
				}
				});
			});

var telephoneId = document.getElementById('telephone'); 
		var mesErreurs2 = document.getElementById('error2');
		telephoneId.addEventListener("focus",function(){
				var mesErreurs2 = document.getElementById("error2");
				mesErreurs2.innerHTML = "<img src='/images/info.png'> Le numéro de téléphone doit contenir 9 chiffres";
				
				telephoneId.addEventListener("input",function(){
				if(condition1.test(this.value)) {
					mesErreurs2.innerHTML = "<img src='/images/good.png'>";
				} 
				else{
					mesErreurs2.innerHTML = "<img src='/images/bad.png'> Le numéro de téléphone doit contenir 9 chiffres";
				}
				});
			});

var emailId = document.getElementById('email'); 
		var mesErreurs5 = document.getElementById('error5');
		emailId.addEventListener("focus",function(){
				var mesErreurs5 = document.getElementById("error5");
				mesErreurs5.innerHTML = "<img src='/images/info.png'> Vous devez saisir un e-mail valide";
				
				emailId.addEventListener("input",function(){
				if((this.value)) {
					mesErreurs5.innerHTML = "<img src='/images/good.png'>";
				} 
				});
			});

var adresseId = document.getElementById('adresse'); 
		var mesErreurs3 = document.getElementById('error3');
		adresseId.addEventListener("focus",function(){
				var mesErreurs3 = document.getElementById("error3");
				mesErreurs3.innerHTML = "<img src='/images/info.png'> L'adresse doit contenir au moins deux caractères";
				
				adresseId.addEventListener("input",function(){
				if(condition2.test(this.value)) {
					mesErreurs3.innerHTML = "<img src='/images/good.png'>";
				} 
				else{
					mesErreurs3.innerHTML = "<img src='/images/bad.png'> L'adresse doit contenir au moins deux caractères";
				}
				});
			});


var professionId = document.getElementById('profession'); 
		var mesErreurs4 = document.getElementById('error4');
		professionId.addEventListener("focus",function(){
				var mesErreurs4 = document.getElementById("error4");
				mesErreurs4.innerHTML = "<img src='/images/info.png'> La profession doit contenir au moins deux caractères";
				
				professionId.addEventListener("input",function(){
				if(condition.test(this.value)) {
					mesErreurs4.innerHTML = "<img src='/images/good.png'>";
				} 
				else{
					mesErreurs4.innerHTML = "<img src='/images/bad.png'> La profession doit contenir au moins deux caractères";
				}
				});
			});


var close = document.getElementById('close');
close.addEventListener("click", function(){
	alert.style.display=none';
})