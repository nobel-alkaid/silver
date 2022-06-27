<textarea
    {{ $attributes->merge([
        'class' => 'mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-main focus:outline-none dark:focus:shadow-outline-gray',
    ]) }} rows=5>{{ $slot }}</textarea>