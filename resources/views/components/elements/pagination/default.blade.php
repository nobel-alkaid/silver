@if ($paginator->hasPages())
    <div class="flex justify-evenly items-center dark:text-gray-400 py-2">
        <p class="page-info">Affichage de  <strong>{{$paginator->count()}}</strong> sur <strong>{{$paginator->total()}}</strong>  Resultats</p>
        <nav aria-label="Page navigation example">
            <ul class="flex list-style-none">
                @if ($paginator->onFirstPage())
                    <li class="">
                        <a
                        class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 focus:shadow-none"
                        role="link" aria-disabled="true"> &laquo; Precedent </a>
                    </li>
                @else
                <li class="page-item">
                    <a class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 dark:text-gray-400 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="{{ $paginator->previousPageUrl() }}"> &laquo; Precedent </a>
                </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                    <li class="page-item active">
                        <a class="page-link relative block py-1.5 px-3 border-0 outline-none transition-all duration-300 rounded-full text-white shadow-md focus:shadow-md" aria-disabled="true"> 
                                <span class="visually-hidden">{{ $element }}</span>
                            </a>
                        </li>
                    {{-- <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li> --}}
                    @endif
                
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                <a class="page-link relative block py-1.5 px-3 border-0 bg-blue-600 outline-none transition-all duration-300 rounded-full text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                                        href="#"> 
                                        <span class="visually-hidden">{{ $page }}</span>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 dark:text-gray-400 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                    href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

               {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 dark:text-gray-400 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                            href="{{ $paginator->nextPageUrl() }}"> Suivant &raquo; </a>
                    </li>
                @else
                    <li class="page-item">
                        <a
                        class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-800 focus:shadow-none"
                        role="link" aria-disabled="true"> Suivant &raquo; </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

@endif


