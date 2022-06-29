<x-dash-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                {{$client->lastname}} {{ $client->firstname }}
            </h2>
        </div>
    </x-slot>


    <div class="w-5/6 mx-auto">
        <section class="inner-section">
            <div class="grid lg:grid-cols-2 gap-8">
                <div class="flex flex-col">
                    <div class="details-gallery">
                        <div>
                            <img class="object-cover w-full h-full rounded-md"
                                src="{{ url('storage/' . $client->image) }}" alt="" loading="lazy" alt="">
                        </div>
                    </div>
                </div>
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <div class="text-3xl font-bold dark:text-gray-400 text-slate-800 mr-2">{{$client->firstname}} {{
                        $client->lastname }}</div>
                    <div class="my-7">
                        <div class=" text-lg mb-1"> <span class="underline font-medium">Numéro carte d'identité</span> :
                            <span class="pl-1">{{ $client->id_card_number }} </span>
                        </div>
                    </div>
                    <div class="my-7">
                        <div class=" text-lg mb-1"> <span class="underline font-medium">Sexe </span> :
                            <span class="pl-1">{{$client->sexe}}</span>
                        </div>
                    </div>
                    <div class="my-7">
                        <div class=" text-lg mb-1"> <span class="underline font-medium">Date de naissance </span> :
                            <span class="pl-1">{{$birthday}}</span>
                        </div>
                    </div>
                    <div class="my-7">
                        <div class=" text-lg mb-1"> <span class="underline font-medium">Numéro de téléphone </span> :
                            <span class="pl-1">{{$client->phone}}</span></div>
                    </div>
                    <div class="my-7">
                        <div class=" text-lg mb-1"> <span class="underline font-medium">Adresse email </span> : <span
                                class="pl-1">{{$client->email}}</span></div>
                    </div>
                    {{-- <div class="text-3xl my-7 font-bold text-slate-800 mr-2">{{moneyFormat($product->price)}} FCFA
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="py-32">
            <div class="my-16 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="text-2xl mb-4 font-semibold text-gray-600 dark:text-gray-300">
                    Liste des séjours
                </h4>
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3 border border-slate-300 dark:border-slate-600 font-semibold text-slate-900 dark:text-slate-200 text-center">Date</th>
                                <th class="px-4 py-3 border border-slate-300 dark:border-slate-600 font-semibold text-slate-900 dark:text-slate-200 text-center">Chambre</th>
                                <th class="px-4 py-3 border border-slate-300 dark:border-slate-600 font-semibold text-slate-900 dark:text-slate-200 text-center">Durée du séjour</th>
                                <th class="px-4 py-3 border border-slate-300 dark:border-slate-600 font-semibold text-slate-900 dark:text-slate-200 text-center">Montant</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($client->sejours as $key => $sejour)
                            <tr>
                                <td class=" text-center font-semibold border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $sejour->date }}
                                </td>
                                <td class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $sejour->room->number }}</td>
                                <td class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $sejour->spent_time }}</td>
                                <td class="text-center border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $sejour->montant }} FCFA</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5"
                                    class="border-b border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 text-center"> Aucun séjour enregistré </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</x-dash-layout>