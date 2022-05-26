@foreach ($users as $user)

    {{$user->groupe_sanguin}}<br>
    {{$user->hopitaux}}<br>
    {{$user->niveau_urgence}}<br>
    {{$user->motifs}}<br>
    <br>
@endforeach
