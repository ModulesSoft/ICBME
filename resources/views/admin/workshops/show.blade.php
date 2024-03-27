@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('Programs') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workshop.fields.id') }}
                        </th>
                        <td>
                            {{ $workshop->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workshop.fields.name') }}
                        </th>
                        <td>
                            {{ $workshop->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workshop.fields.photo') }}
                        </th>
                        <td>
                            @if($workshop->photo)
                                <a href="{{ $workshop->photo->getUrl() }}" target="_blank">
                                    <img src="{{ $workshop->photo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workshop.fields.description') }}
                        </th>
                        <td>
                            {!! $workshop->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection