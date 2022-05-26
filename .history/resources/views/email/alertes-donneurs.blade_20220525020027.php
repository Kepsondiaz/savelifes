@foreach ($users as $user)
    @if ({{$user->id}}==54)
    {{$user->groupe_sanguin}}<br>
    {{$user->hopitaux}}<br>
    {{$user->niveau_urgence}}<br>
    {{$user->motifs}}<br>   
    @endif  
    <br>
@endforeach
