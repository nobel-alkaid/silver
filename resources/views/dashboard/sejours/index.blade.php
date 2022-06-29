<x-dash-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Liste des séjours
            </h2>
            <x-buttons.new text="Nouveau séjour" class="p-3" href="{{route('dashboard.sejours.create')}}" />
        </div>
    </x-slot>

    <x-elements.table :resources="$sejours" :mattributes="$my_attributes" :mactions="$my_actions" type="sejour" />
</x-dash-layout>