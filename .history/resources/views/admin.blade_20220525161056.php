<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>



    </style>





</head>
<body>
    

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