<x-dash-layout>
    <x-slot name="contentHeading">
        <h2 class="dash-page-title">
            Editer produit <span class="font-bold capitalize">#{{$product->name}}</span>
        </h2>
    </x-slot>

    <div class="mx-auto max-w-lg">
        <x-forms.dashboard.edit :fields="$my_fields" :item="$product" type="product" />
    </div>

    @slot('scripts')
    <script>
        CKEDITOR.replace( 'description', {
                uiColor: '#CCEAEE',
                removeButtons: 'PasteFromWord'
            } );

    </script>

    <script src="{{asset('js/preview-file.js')}}"></script>
    @endslot
</x-dash-layout>