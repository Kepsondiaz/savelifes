@foreach ($users as $user)
    @if ({{$user->groupe_sanguin}}==52)
    {{$user->groupe_sanguin}}<br>
    {{$user->hopitaux}}<br>
    {{$user->niveau_urgence}}<br>
    {{$user->motifs}}<br>   
    @endif  
    <br>
@endforeach
