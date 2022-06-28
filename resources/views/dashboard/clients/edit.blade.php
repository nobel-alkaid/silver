<x-dash-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title">
            Changer les infos du client <span class="font-bold capitalize">#{{$client->lastname}} {{ $client->firstname }}</span>
        </h2>
    </x-slot>

    <div class="lg:w-1/2 mx-auto">
        <x-forms.edit :fields="$my_fields" :item="$client" type="client" />
    </div>

    @slot('scripts')

    <script src="{{asset('main/js/preview-file.js')}}"></script>
    @endslot
</x-dash-layout>