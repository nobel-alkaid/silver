<x-mail-layout>

    <div class="email-section">
         <div class="heading-section">
             <h2>Facture 000{{ $invoice->id }}</h2>
             <p>M/Mme <b>{{ $invoice->sejour->client->fullname }}</b>, Nous vous envoyons ce reçu pour votre passage dans notre auberge.</p>
         </div>
         <div class="info-part">
             <a href="{{ URL::to($document) }}" class="btn btn-secondary">Télécharger votre facture</a>
         </div>
     </div>
 
 </x-mail-layout>