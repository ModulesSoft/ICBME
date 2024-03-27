@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <p>Last 100 visits information</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">IP</th>
                        <th scope="col">Page</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $hits = new \App\Statistics;
                    $hits = $hits::latest('date')->take(100)->get();
                    $counter = 0;
                    @endphp
                    @foreach($hits as $hit)
                    <tr>
                        <th scope="row">{{$counter++}}</th>
                        <td>{{$hit->ip}}</td>
                        <td>{{$hit->page}}</td>
                        <td>{{$hit->date}}</td>
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

@endsection