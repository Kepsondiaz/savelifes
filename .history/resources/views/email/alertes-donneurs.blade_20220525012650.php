@foreach ($users as $user)
    {{$user->groupe_sanguin}}
    {{$user->hopital}}
    {{$user->ni}}
@endforeach