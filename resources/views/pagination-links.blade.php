<main>
    @if ($paginator->hasPages())
    
    
    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
    
            <ul class="pagination">
            @if ($paginator->onFirstPage())
                      <li class="page-item"><a class="page-link" href="#" ><i class="bi-arrow-left me-2"></i>Prev</a></li>
            @else
                      <li class="page-item active"><a class="page-link" href="#" wire:click="previousPage"><i class="bi-arrow-left me-2"></i>Prev</a></li>   
            @endif
            </ul>


            <ul class="pagination">
            @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" wire:key="paginator-page-{{ $page }}" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item" wire:key="paginator-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>




            <ul class="pagination">
            @if ($paginator->hasMorePages())
            
              <li class="page-item active"><a class="page-link" href="#" aria-label="Next" wire:click="nextPage">Next<i class=" bi bi-arrow-right ms-2"></i></a></li>
            
            @else
            
              <li class="page-item"><a class="page-link " href="#" aria-label="Next" >Next<i class="bi-arrow-right ms-2"></i></a></li>
            
            @endif
            </ul>
          </nav>
    @endif

    </main>