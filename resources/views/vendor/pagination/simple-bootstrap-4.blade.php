<style>
    .pagination{
        display: inline-block;
        text-align:center;
        }
    .pagination > li {
        display:inline; float:none;
    }
    .pagination_link{
        text-decoration: none;
    }
</style>

@if ($paginator->hasPages())
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <img src="/img/Button_left.svg" style="width: 60px; height: 60px;">
                </li>
            @else
                <li class="page-item">
                    <a class="pagination_link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('')
                        <img src="/img/Button_left.svg" style="width: 60px; height: 60px;"> </a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="pagination_link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('')
                        <img src="/img/Button_right.svg" style="width: 60px; height: 60px;"></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <img src="/img/Button_right.svg" style="width: 60px; height: 60px;">
                </li>
            @endif
        </ul>

@endif
