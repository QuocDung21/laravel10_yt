<ul class="rc-pagination">
    @if($paginator->onFirstPage())
    <li class="rc-pagination-prev">
        <button aria-label="prev page" type="button" class="rc-pagination-item-link" onclick="window.location.href='javascript:;'" tabindex="-1"></button>
    </li>
    @else
    <li class="rc-pagination-prev">
        <button aria-label="prev page" type="button" class="rc-pagination-item-link" onclick="window.location.href='{{ $paginator->previousPageUrl() }}'" tabindex="-1"></button>
    </li>
    @endif

    @foreach($elements as $element)
        @if(is_array($element))
            @foreach($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="rc-pagination-item  rc-pagination-item-active">
                        <a href="#">{{ $page }}</a>
                    </li>
                    
                @else
                    <li class="rc-pagination-item ">
                        <a href="{{ $url }}">{{ $page }}</a>
                    </li>
                    
                @endif
            @endforeach
        @endif
    @endforeach

    
    

    @if ($paginator->hasMorePages())
        <li class="rc-pagination-next">
            <button aria-label="next page" onclick="window.location.href='{{ $paginator->nextPageUrl() }}'" type="button" class="rc-pagination-item-link"></button>
        </li>
    @else
    <li class="rc-pagination-next">
        <button aria-label="next page" type="button" class="rc-pagination-item-link"></button>
    </li>
    @endif
</ul>