<x-dash-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title text-center">
            Modifier la chambre <span class="font-bold capitalize">#{{$room->number}}</span>
        </h2>
    </x-slot>

    <div class="md:w-2/3 lg:w-2/4 mx-auto my-4">
        <x-forms.edit :item="$room" :fields="$my_fields" type="room" />
    </div>
</x-dash-layout>
