<x-dash-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Séjour #000{{$sejour->id}}
            </h2>
        </div>
    </x-slot>


    <div class="md:w-2/3 mx-auto">
        <section class="inner-section">
            <div class="text-center">
                <div class="w-full min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <h2 class="text-3xl font-bold underline text-main mb-12">
                        Détails Séjour #000{{$sejour->id}}
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 shadow-sm">
                            <thead class="bg-slate-50 dark:bg-slate-700">
                                <tr>
                                    <th
                                        class="text-center w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                        Spécification</th>
                                    <th
                                        class="text-center w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                                        Valeur</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Nom du client
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->client->fullname }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Sexe
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->client->sexe }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Numéro de téléphone
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->client->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Adresse de méssagerie
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->client->email }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Numéro chambre louée
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->room->number }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Mode d'aération
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->room->mode }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Tarif horaire
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->room->hourly_price }} FCFA</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        Durée du séjour
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->spent_time }} H</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                       Montant
                                    </td>
                                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-800 dark:text-slate-400">
                                        {{ $sejour->montant }} FCFA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-12 mb-7 lg:w-2/3 mx-auto grid md:grid-cols-2 gap-12">
                       <a href="{{ route('dashboard.invoice.stream', ['invoice' => $sejour->invoice])}}" class="btn-main text-lg font-semibold px-5 flex items-center justify-between" target="blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                            <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                          </svg>
                          <span>Voir la facture</span>
                       </a>
                       <a class="btn-secondary text-lg font-semibold px-5 flex items-center justify-between" href="{{ route('dashboard.invoice.send', ['invoice' => $sejour->invoice]) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                          </svg>
                          <span>Envoyer la facture</span>
                       </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-dash-layout>