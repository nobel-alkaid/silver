<x-dash-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Liste des Chambres
            </h2>
        </div>
    </x-slot>


    <div class="w-full flex flex-col md:grid md:grid-cols-7 gap-5 py-5 mb-10 md:mb-0">
        <div class="md:col-span-5">
            <x-elements.table :resources="$rooms" :mattributes="$my_attributes" :mactions="$my_actions" type="room" />
        </div>
        <div class="border dark:border-gray-700 overflow-hidden rounded-lg shadow-xs p-4 dark:bg-gray-800 flex flex-col gap-4 md:col-span-2">
            <h2 class="font-bold text-gray-500 text-lg border-b border-gray-300">Nouvelle chambre</h2>
            <x-forms.create :fields="$my_fields" type="room" />
        </div>
    </div>

</x-dash-layout>
