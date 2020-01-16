@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a href="{{ $paginator->previousPageUrl() }}" class="disabled waves-effect waves-light btn light-text "><</a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="waves-effect waves-light btn light-text "><</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li  class="waves-effect waves-light btn light-text " aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="" aria-current="page"><a class="waves-effect waves-light btn light-text grey page-link">{{ $page }}</a></li>
                    @else
                        <li class=""><a class="waves-effect waves-light btn light-text page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="waves-effect waves-light btn light-text ">></a>
      @else
        <a href="{{ $paginator->nextPageUrl() }}" class="disabled waves-effect waves-light btn light-text ">></a>
      @endif
    </ul>
@endif
