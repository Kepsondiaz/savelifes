@foreach ($users as $user)
    {{$user->groupe_sanguin}}<b
    {{$user->hopitaux}}
    {{$user->niveau_urgence}}
    {{$user->motifs}}
@endforeach
