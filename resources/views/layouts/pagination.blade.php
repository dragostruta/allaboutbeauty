@if (isset($paginator) && $paginator->lastPage() > 1)
    <ul class="pagination m-3">
    @php
        $interval = isset($interval) ? abs(intval($interval)) : 3 ;
        $from = $paginator->currentPage() - $interval;
        if($from < 1){
          $from = 1;
        }

        $to = $paginator->currentPage() + $interval;
        if($to > $paginator->lastPage()){
          $to = $paginator->lastPage();
        }
    @endphp
    <!-- first/previous -->
        @if($paginator->currentPage() > 1)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}" aria-label="First">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->currentPage() - 1) }}" aria-label="Previous">
                    <span aria-hidden="true">&lsaquo;</span>
                </a>
            </li>
        @endif
    <!-- links -->
        @for($i = $from; $i <= $to; $i++)
            @php
                $isCurrentPage = $paginator->currentPage() == $i;
            @endphp
            <li class="page-item {{ $isCurrentPage ? 'active' : '' }}">
                <a class="page-link" href="{{ !$isCurrentPage ? $paginator->url($i) : '#' }}">
                    {{ $i }}
                </a>
            </li>
        @endfor
    <!-- next/last -->
        @if($paginator->currentPage() < $paginator->lastPage())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->currentPage() + 1) }}" aria-label="Next">
                    <span aria-hidden="true">&rsaquo;</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->lastpage()) }}" aria-label="Last">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        @endif
    </ul>
@endif
