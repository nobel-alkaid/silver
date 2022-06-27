<x-dash-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title">
            Modifier la chambre <span class="font-bold capitalize">#{{$room->number}}</span>
        </h2>
    </x-slot>

    <div class="max-w-lg">
        <x-forms.edit :item="$room" :fields="$my_fields" type="room" />
    </div>
</x-dash-layout>
