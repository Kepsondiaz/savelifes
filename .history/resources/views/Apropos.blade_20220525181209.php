@extends('layout.app')

@section('content')
<div class="top">
        
    <img class="image" src="/img/blood.jpg" alt="">
    <div class="mask"></div>
</div>
<div class="ontop">
    
    <a href="index.php"><input type="button" value="Accueil"></a>
    <a href="/devenir"><input type="button" value="Devenir donneur"></a>
    <a href="/A-propos-de-nous"><input type="button" value="A propos de Savelife"></a>
    <a href="/contact"><input type="button" value="Contact"></a><br>

</div>
<hr>
<h1>A propos de Savelife</h1>
<div class="bouki">
    <p>Pourquoi Savelife ?</p>
    <div class="propos">
        <nav></nav>
        <h3>Au Sénégal, le besoin en produits sanguins accroit alors que les banques de sang sont souvent 
            en rupture dûe au manque de don.<br><em style="color:#f00020;">Savelife</em> est une plateforme digitale de don de sang visant à réduire le problème du besoin par un système d'étude et de localisation ainsi que la sensibilisation ayant pour but de mobiliser et de fidéliser les donneurs sur l'ensemble du territoire.
        </h3>
    </div>
</div>
@endsection