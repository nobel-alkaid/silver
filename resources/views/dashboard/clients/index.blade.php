<x-dash-layout>
    <x-slot name="contentHeading">
        <div class="flex justify-between items-center">
            <h2 class="dash-page-title">
                Liste des produits
            </h2>
            <x-buttons.new text="Nouveau client" class="p-3" href="{{route('dashboard.clients.create')}}" />
        </div>
    </x-slot>

    <x-elements.table :resources="$clients" :mattributes="$my_attributes" :mactions="$my_actions" type="client" />
</x-dash-layout>