<div class="pagination__display">
  <p>
    <span>{{ $paginator->total() }}</span>
    {!! __('件中') !!} @if ($paginator->firstItem())
    <span>{{ $paginator->firstItem() }}</span>
    {!! __('件から') !!}
    <span>{{ $paginator->lastItem() }}</span>
    {!! __('件表示中') !!} @else
    {{ $paginator->count() }}
    @endif
  </p>
</div>
