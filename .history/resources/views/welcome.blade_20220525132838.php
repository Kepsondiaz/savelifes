@extends('layout.app')

@section('content')
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
	<div class="bouki">
		<table border="1px">
			<tr>
				<th>Groupe Sanguin</th>
				<th>Lieux</th>
				<th>Niveau D'urgence</th>
				<th>Motifs</th>
				<th>Date De Pulication</th>
				<th>Action</th>
			</tr>
			<tr>
				@foreach ($alertes as $alert)
			{{$alert->groupe_sanguin}}
			{{$alert->hopitaux}}
			{{$alert->niveau_urgence}}
			{{$alert->motifs}}
			{{$alert->created_at}}
			
		@endforeach
			</tr>
		</table>
		
	</div> 
@endsection
