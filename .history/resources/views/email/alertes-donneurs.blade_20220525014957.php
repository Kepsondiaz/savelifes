@foreach ($users as $user)
    {{$user->groupe_sanguin}}<br
    {{$user->hopitaux}}
    {{$user->niveau_urgence}}
    {{$user->motifs}}
@endforeach
