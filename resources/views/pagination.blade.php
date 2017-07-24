@if ($paginator->lastPage() > 1)
    <p class="pagination">
        {{--<p class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">--}}
            <a href="{{ $paginator->url(1) }}">Previous</a>
        {{--</p>--}}
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            {{--<p class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">--}}
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            {{--</p>--}}
        @endfor
        {{--<p class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">--}}
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
        {{--</p>--}}
    </p>
@endif