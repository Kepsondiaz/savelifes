@foreach ($users as $user)
    @if ({{$user->groupe_sanguin}}==5)
        
    @endif
    
        {{$user->groupe_sanguin}}<br>
        {{$user->hopitaux}}<br>
        {{$user->niveau_urgence}}<br>
        {{$user->motifs}}<br>
    
    <br>
@endforeach
