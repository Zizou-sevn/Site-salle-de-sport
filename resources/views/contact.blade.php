@extends ('base')

@section('title', 'contact')

@section('content')
    <h2>Contact</h2>
    <ul>
        <li>Téléphone : le 06 00 00 00 00</li>
        <li> Adresse : 5 Bd Louis XIV, 59800 Lille</li>
    </ul>


    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.3222872367787!2d3.067920957161816!3d50.6287579775358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x696a915c511814af!2s5%20Bd%20Louis%20XIV%205%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1702033493456!5m2!1sfr!2sfr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br>
    <hr>
    
    <h2>Nous Envoyez un mail</h2>
    <form action="Contact.html"></form>
    <div>
        <label for="email">Votre email</label>
        <input type="email" required name="email" id="email" placeholder="votre@email.fr">
    </div>
    <div>
        <label for="Nom">Votre nom</label>
        <input type="text" required name="Nom" id="Nom" placeholder="nom">
    </div>
    <div>
        <label for="telephone">Numero de Telephone</label>
        <input type="telephone" required name="telephone" id="telephone" placeholder="telephone">
    </div>
    <div>
        <label for="message"> Votre message</label>
        <textarea name="message" id="message" required cols="30" rows="10" placeholder="Ecrivez-nous"></textarea>
    </div>
    <button type="submit">Envoyer votre email</button>
    <div>
        <br>
        <input type="checkbox"> j'accepte les conditions
        <button type="submit"> Valider</button>
    </div>
@endsection
