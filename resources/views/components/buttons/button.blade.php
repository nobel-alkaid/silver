@props(['text'])

<button {{$attributes->merge(['class' => "btn-main"
    ])}}>
    {{$text}}
</button>