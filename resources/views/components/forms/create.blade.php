<div class="w-full overflow-hidden dark:border-gray-700">
    <x-errors.validation :errors="$errors" class="mb-6" />
    <form action="{{ route('dashboard.'. Str::plural($type) . '.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @foreach ($fields as $attr => $value)
        <div class="mb-6">
            <?php
                $component = 'inputs.' . $value['field'];
            ?>
            @if ($value['field'] === 'model')
            <x-labels.label for="{{ $attr }}" value="Choix {{ Str::lower($value['title']) }}" class="mb-1 block">
            </x-labels.label>
            <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                class="block w-full capitalize text-gray-500">
                <option value="">Sélectionner {{ Str::lower($value['title']) }}</option>
                @foreach ($value['options'] as $item)
                <option value="{{ $item->id }}" @selected(old($attr))>{{ $item->{$value['column']} }}</option>
                @endforeach
            </x-dynamic-component>
            @elseif ($value['field'] === 'select')
            <x-labels.label for="{{ $attr }}" value="Choix {{ Str::lower($value['title']) }}" class="mb-1 block">
            </x-labels.label>
            <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                class="block w-full capitalize text-gray-500">
                <option value="">Sélectionner {{ $attr }}</option>
                @foreach ($value['options'] as $key=>$value)
                <option value="{{ $key }}" @selected(old($attr))> {{ $value }} </option>
                @endforeach
            </x-dynamic-component>
            @elseif ($value['field'] === 'multiple-select')
            <x-labels.label for="{{ $attr }}" value="Choix {{ Str::lower($value['title']) }}" class="mb-1 block">
            </x-labels.label>
            <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}[]"
                class="block w-full capitalize">
                @foreach ($value['options'] as $item)
                <option value="{{ $item->id }}" @selected(old($attr))>
                    {{ $item->name ?? $item->title }}</option>
                @endforeach
            </x-dynamic-component>
            @elseif ($value['field'] === 'textarea')
            <x-labels.label for="{{ $attr }}" value="Entrez la valeur pour {{ Str::lower($value['title']) }}"
                class="mb-1 block">
            </x-labels.label>
            <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                type="{{ $value['field'] }}" placeholder="{{ $value['title'] }}" class="block w-full">
                {{ old($attr) }}</x-dynamic-component>
            @elseif ($value['field'] === 'file')
            <x-labels.label for="{{ $attr }}" value="Entrez la valeur pour {{ Str::lower($value['title']) }}"
                class="mb-1 block">
            </x-labels.label>
            <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                type="{{ $value['field'] }}" class="block w-full" />
            @else
            <x-labels.label for="{{ $attr }}" value="Entrez la valeur pour {{ Str::lower($value['title']) }}"
                class="mb-1 block">
            </x-labels.label>
            <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                type="{{ $value['field'] }}" placeholder="{{ $value['title'] }}" class="block w-full"
                value="{{ old($attr) }}" />
            @endif
        </div>
        @endforeach
        <x-buttons.button type="submit" text="Enregistrer" />
    </form>
</div>