
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
         <script type="text/javascript" src="/js/app.js"></script> 
    </body>
