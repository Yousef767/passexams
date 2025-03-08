@if ($paginator->hasPages())
<div class="paginationCont">
    <!-- Showing Info -->
    <div class="page">
        Showing
        <span>{{ $paginator->firstItem() }}-{{ $paginator->lastItem() }}</span>
        of
        <span>{{ $paginator->total() }}</span>
    </div>

    <!-- Pagination Links -->
    <div class="paginations">
        <ul class="spans">
            <!-- Previous Page Link -->
            @if ($paginator->onFirstPage())
                <li><span class="page-link disabled"><img src="{{ asset('assets/back/media/icons/arrow-prev.svg') }}" alt=""></span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" class="page-link"><img src="{{ asset('assets/back/media/icons/arrow-prev.svg') }}" alt=""></a></li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                @if (is_string($element))
                    <!-- "..." Separator -->
                    <li><span class="page-link disabled">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a href="##" class="page-link active">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <!-- Next Page Link -->
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" class="page-link"><img src="{{ asset('assets/back/media/icons/arrow-next.svg') }}" alt=""></a></li>
            @else
                <li><span class="page-link disabled"><img src="{{ asset('assets/back/media/icons/arrow-next.svg') }}" alt=""></span></li>
            @endif
        </ul>
    </div>
</div>
@endif
