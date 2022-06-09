@extends('layout.app')

@section('content')
	<div class="top">
		<img class="image" src="/img/blood.jpg" alt="">
		<div class="mask"></div>
	</div>
	<div class="ontop">
		
		<a href="index.php"><input type="button" value="Alertes"></a>
		<a href="/devenir"><input type="button" value="Devenir donneur"></a>
		<a href="#"><input type="button" value="A propos de nous"></a>
		<a href="contact.php"><input type="button" value="Contact"></a><br>

	</div>
	<hr>
	<h1>Plateforme Digitale De<br> Don De Sang</h1>
	<div class="bouki">
		<table class="table">
			<tr class="">
				<th scope="col">Groupe Sanguin</th>
				<th scope="col">Lieux</th>
				<th scope="col">Niveau D'urgence</th>
				<th scope="col">Motifs</th>
				<th scope="col">Date De Pulication</th>
				<th scope="col">Action</th>
			</tr>
			<tr>
				@foreach ($alertes as $alert)
				<td>{{$alert->groupe_sanguin}}</td>
				<td>{{$alert->hopitaux}}</td>
				<td>{{$alert->niveau_urgence}}</td>
				<td>{{$alert->motifs}}</td>
				<td>{{$alert->created_at}}</td>
				<td>Partager</td>
			</tr>
			@endforeach
		</table>
		
	</div> 
@endsection
