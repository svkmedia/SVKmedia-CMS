Dobrý deň,<br><br>

na základe Vašej požiadavky Vám posielame odkaz na vytvorenie nového hesla do administrácie web stránky.<br><br>

Nové heslo si vytvoríte tu: {{ url('admin/auth/password/reset/'.$token) }}<br><br>

Platnosť odkazu je 60 minút. Po uplynutí tejto doby bude odkaz neplatný.<br><br><br>

<a href="http://www.svkmedia.sk">
    <img src="{{ $message->embed('./img/logo-svkmedia-email.png') }}" alt="svkmedia logo">
</a>

<br><br><br>

<small style="color: #777;">
    V prípade, že ste nežiadali o zaslanie nového hesla, tento email ignorujte.<br>
    Tento email bol vygenerovaný automaticky, preto naňho neodpovedajte.
</small>

