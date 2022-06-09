<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creér-alerts</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
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
    <input type="submit" name="" id="" value="envoyer" class="">
</form>

</body>
</html>