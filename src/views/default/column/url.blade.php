<td>
    @if ( ! is_null($url))
        <a href="{{ $url }}">{{ $value?$value.' ': '' }}<i class="fa fa-arrow-circle-o-right" data-toggle="tooltip"
                                                          title="{{ trans('admin::lang.table.filter-goto') }}"></i></a>
    @endif
</td>