<div class="w-full overflow-hidden rounded-lg shadow-xs border dark:border-gray-700">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    @foreach ($mattributes as $column => $title)
                        <th class="px-4 py-3 text-center ">{{ $title }}</th>
                    @endforeach
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @if (count($resources) > 0)
                    @foreach ($resources as $resource)
                        <tr class="text-gray-700 dark:text-gray-400">
                            @foreach ($mattributes as $column => $title)
                                <td class="px-4 py-3 text-center">
                                    @if ($column == 'avatar' || $column == 'image')
                                        <a class="flex items-center text-sm hover:opacity-80 justify-center ">
                                            <!-- Avatar OR Image with inset shadow -->
                                            <div class="relative h-10 mr-3 md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="{{ url('storage/' . $resource->{$column}) }}" alt="" loading="lazy">
                                            </div>
                                            {{-- <div>
                                                <p class="font-semibold capitalize">{{ $resource->name }}</p>
                                            </div> --}}
                                        </a>
                                    @else
                                        @if (is_object($resource->{$column}))
                                            {{ $resource->{$column}->title ?? $resource->{$column}->name ?? $resource->{$column}->fullname }}
                                        @elseif (is_string($resource->{$column}) && mb_strlen($resource->{$column}) > 100 )
                                            {{ Str::of($resource->{$column})->limit(100, '(...)') }}
                                        @else
                                            {{ $resource->$column }}
                                        @endif
                                    @endif
                                </td>
                            @endforeach
                            <td class="px-4 py-3 text-center">
                                <div class="flex items-center space-x-4 text-sm justify-center">
                                    @foreach ($mactions as $action => $title)
                                        @if ($action == 'show')
                                            <a href="{{ route('dashboard.'. Str::plural($type).'.show', [$type => $resource->id]) }}"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd"
                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        @elseif ($action == 'edit')
                                            <a href="{{ route('dashboard.'. Str::plural($type).'.edit', [$type => $resource->id]) }}"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-main rounded-lg dark:text-main focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </a>
                                        @elseif ($action == 'delete')
                                            <form action="{{ route('dashboard.'. Str::plural($type) . '.destroy', [$type => $resource]) }}" method="POST" onsubmit="return confirm('Voulez vous supprimer cet élément ?')">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600  rounded-lg dark:text-red-600 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Delete">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="{{ count((array)$mattributes) + 1 }}"
                            class="px-6 py-4 whitespace-nowrap text-center text-gray-400"> Aucun Element </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <!-- Pagination -->
        <span class="flex mt-2 py-3 sm:mt-auto sm:justify-center">
            {{ $resources->links() }}
        </span>
    </div>
</div>
