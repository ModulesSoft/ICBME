@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <p>Last 100 Visits</p>
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
        <div class="col-lg-6">
            <p>Last 100 Subscriptions</p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">IP</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $subscriptions = new \App\Subscription;
                    $subscriptions = $subscriptions::latest('created_at')->take(100)->get();
                    $counter = 0;
                    @endphp
                    @foreach($subscriptions as $subscription)
                    <tr>
                        <th scope="row">{{$counter++}}</th>
                        <td>{{$subscription->email}}</td>
                        <td>{{$subscription->ip}}</td>
                        <td>{{$subscription->created_at}}</td>
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