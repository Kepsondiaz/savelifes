@foreach ($users as $user)
    {{$user->groupe_sanguin}}
    {{$user->hopitaux}}
    {{$user->niveau_urgence}}
    {{$user->motifs}}
@endforeach
