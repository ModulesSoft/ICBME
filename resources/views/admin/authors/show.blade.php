@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.author.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.id') }}
                        </th>
                        <td>
                            {{ $author->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.name') }}
                        </th>
                        <td>
                            {{ $author->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.photo') }}
                        </th>
                        <td>
                            @if($author->photo)
                                <a href="{{ $author->photo->getUrl() }}" target="_blank">
                                    <img src="{{ $author->photo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.author.fields.description') }}
                        </th>
                        <td>
                            {!! $author->description !!}
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