<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a href="{{route('dashboard.index')}}" class="flex justify-center h-24 w-2/3 mx-auto">
            <x-elements.logo />
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                @php
                    $active = request()->is('dashboard');
                @endphp
                @if ($active)
                    <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a @class([
                    'inline-flex items-center w-full font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 ',
                    'dash-active-link' => $active,
                ]) href="{{ route('dashboard.index') }}">
                    <svg class="h-6 w-6" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Acceuil</span>
                </a>
            </li>
        </ul>
        <ul class="text-base">
            <li class="relative px-6 py-3">
                @php
                    $active = request()->is('dashboard/rooms') || request()->is('dashboard/rooms/*');
                @endphp
                @if ($active)
                    <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a @class([
                    'inline-flex items-center w-full font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200',
                    'dash-active-link' => $active,
                ]) href="{{ route('dashboard.rooms.index') }}">
                    <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
                    <span class="ml-4">Chambres</span>
                </a>

            </li>

            <li class="relative px-6 py-3">
                @php
                    $active = request()->is('dashboard/clients') || request()->is('dashboard/clients/*');
                @endphp
                @if ($active)
                    <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <button 
                    @class([ 'inline-flex items-center w-full font-semibold transition-colors duration-150 hover:text-gray-800 
                        dark:hover:text-gray-200', 'dash-active-link' => $active,
                    ]) @click="togglePagesMenu" aria-haspopup="true" 
                    class="inline-flex items-center justify-between w-full font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <span class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="ml-4">Clients</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300"
                        x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                        x-transition:leave="transition-all ease-in-out duration-300"
                        x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                        class="p-2 mt-2 space-y-2 overflow-hidden font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                        aria-label="submenu">

                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ route('dashboard.clients.create') }}">
                                Créer
                            </a>
                        </li>
                        <li
                            class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ route('dashboard.clients.index') }}">
                                Lister
                            </a>
                        </li>
                    </ul>
                </template>
            </li>

            <li class="relative px-6 py-3">
                @php
                    $active = request()->is('dashboard/sejours') || request()->is('dashboard/sejours/*');
                @endphp
                @if ($active)
                    <span class="absolute inset-y-0 left-0 w-1 bg-main rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                @endif
                <a @class([
                    'inline-flex items-center w-full font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200',
                    'dash-active-link' => $active,
                ]) href="{{ route('dashboard.sejour.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4zM8 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1H9a1 1 0 01-1-1V4zM15 3a1 1 0 00-1 1v12a1 1 0 001 1h2a1 1 0 001-1V4a1 1 0 00-1-1h-2z" />
                      </svg>
                    <span class="ml-4">Sejours</span>
                </a>
            </li>

        </ul>
        <div class="px-6 my-6">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn-main text-lg font-semibold px-5">
                    Se deconnecter
                    {{-- <span class="ml-2" aria-hidden="true">+</span> --}}
                </button>
            </form>
        </div>
    </div>
</aside>
