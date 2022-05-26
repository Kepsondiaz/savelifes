<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form action="alerte" method="POST" >
    @csrf
    <label for="groupe_sanguin">Groupe Sanguin</label>
    <select id="groupe_sanguin" name="groupe_sanguin" required>
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
    <textarea name="motif" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="" id="" value="envoyer">
</form>

</body>
</html>