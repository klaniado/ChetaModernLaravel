@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <h4 style="display:inline-block;color:black;margin-left:45vw;" class="disabled"><span>&laquo;</span></h4>
        @else
            <h4 style="display:inline-block;color:black;margin-left:45vw;"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></h4>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <h4 style="display:inline-block;color:black;" class="disabled"><span>{{ $element }}</span></h4>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <h4 style="display:inline-block;color:black;" class="active"><span>{{ $page }}</span></h4>
                    @else
                        <h4 style="display:inline-block;color:black;"><a href="{{ $url }}">{{ $page }}</a></h4>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <h4 style="display:inline-block;color:black;"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></h4>
        @else
            <h4 style="display:inline-block;color:black;" class="disabled"><span>&raquo;</span></h4>
        @endif
    </ul>
@endif
