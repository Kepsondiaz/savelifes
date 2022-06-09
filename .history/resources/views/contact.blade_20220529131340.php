@extends('layout.app')

@section('content')
    <div class="top">
            
        <img class="image" src="/img/blood.jpg" alt="">
        <div class="mask"></div>
    </div>
    <div class="ontop">
        
        <a href="index.php"><input type="button" value="Alertes"></a>
        <a href="/devenir"><input type="button" value="Devenir donneur"></a>
        <a href="/A-propos-de-nous"><input type="button" value="A propos de nous"></a>
        <a href="/contact"><input type="button" value="Contact"></a><br>

    </div>
    <hr>
    <h1>Nous Contacter</h1>
    <div class="bouki">
        <div>
            <h2>Vous souhaitez-nous contacter ?</h2>
            <hr>
            <p>Que ce soit pour nous poser des questions, proroser un partenariat ou juste nous connaitre un peu<br> mieux, c'est possible!<br> <strong style="color: #f00020;">C'est par ici</strong></p>

            <form action="contact" method="POST">
                    @csrf
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom.."  class="largeur" required>

                    <label for="prenom">Prenom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom.." class="largeur" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required>Votre message...</textarea>
                
                    <input type="submit" value="VALIDER">   
            </form>
            <br>
            @if (session()->has('message_succes'))
                {{-- <p class="alert alert-success">{{session()->get('message_succes')}}</p> --}}

                    <div class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <p>ession()->get('message_succes')</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
            @endif
        </div>
    </div
@endsection