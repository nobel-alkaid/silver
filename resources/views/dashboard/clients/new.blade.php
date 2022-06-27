<x-dash-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title text-center">
            Enregistrer un nouveau client
        </h2>
    </x-slot>

    <div class="w-2/4 mx-auto my-4">
        <x-forms.create :fields="$my_fields" type="client" />
    </div>

    @slot('scripts')
        <script src="{{ asset('main/js/preview-file.js') }}"></script>
    @endslot
</x-dash-layout>
