<x-dash-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Détails Chambre #{{$room->number}}
            </h2>
        </div>
    </x-slot>

    <div class="my-16 min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="text-2xl mb-4 font-semibold text-gray-600 dark:text-gray-300">
            Specifications
        </h4>
        <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 shadow-sm">
            <thead class="bg-slate-50 dark:bg-slate-700">
                <tr>
                    <th
                        class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                        Caractéristiques</th>
                    <th
                        class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">
                        Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=" font-semibold border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        Numéro de chambre
                    </td>
                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $room->number }}</td>
                </tr>
                <tr>
                    <td class=" font-semibold border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        Mode d'aération
                    </td>
                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $room->mode }}</td>
                </tr>
                <tr>
                    <td class=" font-semibold border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        Taux horaire
                    </td>
                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ moneyFormat($room->hourly_price) }} FCFA</td>
                </tr>
                <tr>
                    <td class=" font-semibold border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        Description
                    </td>
                    <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                        {{ $room->description }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('dashboard.rooms.edit', ['room' => $room]) }}">
            <x-buttons.button type="submit" text="Modifier" class="px-5 my-3" />
        </a>
    </div>

</x-dash-layout>