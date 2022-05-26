@foreach ($users as $user)
    @if ()
        
    @endif
    
        {{$user->groupe_sanguin}}<br>
        {{$user->hopitaux}}<br>
        {{$user->niveau_urgence}}<br>
        {{$user->motifs}}<br>
    
    <br>
@endforeach
