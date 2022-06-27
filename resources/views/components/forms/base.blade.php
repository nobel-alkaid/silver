{{-- {{ print_r($mattributes) }} --}}
@foreach ($mattributes as $attribut => $value)
    <div class="mb-4">
        <?php
            $component = 'inputs.dashboard.' . $value['field'];
        ?>
        <x-dynamic-component :component="$component" id="{{ $attribut }}{{ $index }}" name="{{ $attr }}[{{$index}}][{{$attribut}}]" type="{{ $value['field'] }}"
        placeholder="{{ $value['title'] }}" class="block w-full" value="{{ old($attribut) ?? ($model ? $model->{$attr}[$index][$attribut] : '') }}" />
    </div>
@endforeach
