<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crer-alerts</title>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

#it{
    display: none;
}

*{

    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;

}



@media screen and (min-width : 400px) {

    

    body{
        text-align: center;
        
        padding-top: 7vh;
        background: white;
       

    }

    form{

        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        width: 500px;
        margin: auto;
        text-align: left;
        /* transform: translateX(-1.75cm); */
        padding: 20px;
        background: white;
        border-radius: 20px;
        
    }

    form select , form input {
        width: 500px;
        height: 1cm;
        margin: 5px;
    }

  

    form textarea {
        width: 500px;
    }

    img {
        text-align: center;
        height: 4cm;
        margin: auto;
    }

    #send{
        border: none;
        border-radius: 5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;

    }

    #send:hover{
        background-color: #f00020;
        color: white;
        font-size: 20px;
        transition: 0.4s;
    }
}

@media screen and (max-width : 400px){
    body{
        text-align: center;
    }

    img{
        height: 3cm;
        margin-bottom: 20px;
    }

    form{

    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    width: max-content;
    margin: auto;
    text-align: left;
    padding: 20px;
    background: white;
    border-radius: 20px;

    }

    #send{
        border: none;
        border-radius: 5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;

    }

    #send:hover{
        background-color: #f00020;
        color: white;
        font-size: 20px;
        transition: 0.4s;
    }

    form select , form input {
        width: 250px;
        height: 1cm;
        margin: 5px;
    }

  

    form textarea {
        width: 250px;
    }


}


    </style>





</head>
<body>
    
<img src="blood-drop.png" alt=""><br>
<form action="alerte" method="POST" >
    @csrf
    <label for="groupe_sanguin">Groupe Sanguin</label><br>
    <select id="groupe_sanguin" name="groupe_sanguin" required>
        <option value="">choisir un groupe sanguin</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
    <label for="hopital">Hopital</label>
    <input type="text" name="hopital" required>
    <label for="niveau_urgence">Niveau D'Urgence</label>
    <select id="niveau_urgence" name="niveau_urgence" required>
        <option value="pas urgent">pas urgent</option>
        <option value="moins_urgent">moins urgent</option>
        <option value="urgent">urgent</option>
        <option value="tres_urgent">Trés urgent</option>
    </select>
    <label for="motif">motif</label>
    <textarea name="motif" id="" cols="30" rows="10" required></textarea>
    <input type="submit" name="" id="" value="envoyer">
</form>

</body>
</html>