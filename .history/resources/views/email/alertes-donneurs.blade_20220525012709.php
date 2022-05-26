@foreach ($users as $user)
    {{$user->groupe_sanguin}}
    {{$user->hopital}}
    {{$user->niveau_urgence}}
    {{$user->motifs}}
@endforeach