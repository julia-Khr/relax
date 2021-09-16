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
    .custum-pagination{
        position: absolute;
        display: flex;
        justify-content: space-between;
        margin-left: -21%;
        width: 130%;
        top: calc(50% - 50px);
        }
    .arrow-left{
        position: relative;
    }
    .arrow-right{
        position: relative;
    }
</style>

@if ($paginator->hasPages())
        <ul class="pagination custum-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <img src="/img/Button_left.svg" style="width: 50px; height: 50px;">
                </li>
            @else
                <li class="page-item arrow-left">
                    <a class="pagination_link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('')
                        <img src="/img/Button_left.svg" style="width: 50px; height: 50px;"> </a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item arrow-right">
                    <a class="pagination_link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('')
                        <img src="/img/Button_right.svg" style="width: 50px; height: 50px;"></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <img src="/img/Button_right.svg" style="width: 50px; height: 50px;">
                </li>
            @endif
        </ul>

@endif
