@extends('layouts.admin')
@section('content')
{{--@can('workshop_create')--}}
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.workshops.create") }}">
                {{ trans('global.add') }} {{ trans('Programs') }}
            </a>
        </div>
    </div>
{{--@endcan--}}
<div class="card">
    <div class="card-header">
        {{ trans('cruds.workshop.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-workshop">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.workshop.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.workshop.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.workshop.fields.photo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workshops as $key => $workshop)
                        <tr data-entry-id="{{ $workshop->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $workshop->id ?? '' }}
                            </td>
                            <td>
                                {{ $workshop->name ?? '' }}
                            </td>
                            <td>
                                @if($workshop->photo)
                                    <a href="{{ $workshop->photo->getUrl() }}" target="_blank">
                                        <img src="{{ $workshop->photo->getUrl('thumb') }}" width="50px" height="50px">
                                    </a>
                                @endif
                            </td>
                            <td>
{{--                                @can('workshop_show')--}}
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.workshops.show', $workshop->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                {{--@endcan--}}

{{--                                @can('workshop_edit')--}}
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.workshops.edit', $workshop->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                {{--@endcan--}}

{{--                                @can('workshop_delete')--}}
                                    <form action="{{ route('admin.workshops.destroy', $workshop->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                {{--@endcan--}}

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('workshop_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.workshops.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-workshop:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection