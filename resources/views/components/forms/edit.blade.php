<div class="w-full overflow-hidden dark:border-gray-700">
    <x-errors.dashboard.validation :errors="$errors" class="mb-6" />
    <form action="{{ route(Str::plural($type) . '.update', [$type => $item]) }}" method="POST"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @foreach ($fields as $attr => $value)
            <div class="mb-4">
                <?php
                	$component = 'inputs.dashboard.'.$value['field'];
                    $fill = $item->{$attr};
                ?>

                @if ($value['field'] === 'model')
                    <x-labels.dashboard.label for="{{ $attr }}"
                        value="Choix {{ Str::lower($value['title']) }}" class="mb-1 block">
                    </x-labels.dashboard.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        class="block w-full capitalize text-gray-500">
                        <option value="">Sélectionner {{ Str::lower($value['title']) }}</option>
                        @foreach ($value['options'] as $data)
                            <option value="{{ $data->id }}" @selected(old($attr) ?? $fill->id === $data->id)>{{ $data->name ?? $data->title }}</option>
                        @endforeach
                    </x-dynamic-component>
                @elseif ($value['field'] === 'select')
                    <x-labels.dashboard.label for="{{ $attr }}"
                        value="Choix {{ Str::lower($value['title']) }}" class="mb-1 block">
                    </x-labels.dashboard.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        class="block w-full capitalize text-gray-500">
                        <option value="">Sélectionner</option>
                        @foreach ($value['options'] as $key=>$value)
                            <option value="{{ $key }}" @selected(old($attr) ?? is_string($fill) ? '' : $fill->id === $key)> {{ $value }} </option>
                        @endforeach
                    </x-dynamic-component>
                @elseif ($value['field'] === 'multiple-select')
                    <x-labels.dashboard.label for="{{ $attr }}"
                        value="Choix {{ Str::lower($value['title']) }}" class="mb-1 block">
                    </x-labels.dashboard.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}[]"
                        class="block w-full capitalize">
                        @foreach ($value['options'] as $data)
                            <option value="{{ $data->id }}" @selected(old($attr) ?? $fill->id === $data->id)>
                                {{ $data->name ?? $data->title }}</option>
                        @endforeach
                    </x-dynamic-component>
                @elseif ($value['field'] === 'textarea')
                    <x-labels.dashboard.label for="{{ $attr }}"
                        value="Entrez la valeur pour {{ Str::lower($value['title']) }}" class="mb-1 block">
                    </x-labels.dashboard.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" placeholder="{{ $value['title'] }}" class="block w-full">
                        {{ old($attr) ?? $item->{$attr} }}</x-dynamic-component>
                @elseif ($value['field'] === 'file')
                    <x-labels.dashboard.label for="{{ $attr }}"
                        value="Entrez la valeur pour {{ Str::lower($value['title']) }}" class="mb-1 block">
                    </x-labels.dashboard.label>
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" class="block w-full" />
                @elseif ($value['field'] === 'nested')
                    @livewire('nested', ['item' => $value, 'title' => $value['title'], 'attr' => $attr, 'model' => $item])
                @else
                    <x-dynamic-component :component="$component" id="{{ $attr }}" name="{{ $attr }}"
                        type="{{ $value['field'] }}" placeholder="{{ $value['title'] }}"
                        class="block w-full capitalize" value="{{ old($attr) ?? $fill }}" />
                @endif

            </div>
        @endforeach
        <x-buttons.dashboard.button type="submit" text="Modifier" />
    </form>
