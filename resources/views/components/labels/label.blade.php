@props(['value'])

<label {{ $attributes->merge(['class' => 'text-gray-700 dark:text-gray-400 text-base']) }}>
    {{ $value }}
</label>


{{-- <div class="block mb-4 text-sm">
    <label class="text-gray-700 dark:text-gray-400">{{$label}}</label>
</div> --}}