@extends('layouts.master')
@include('partials.header')

@section('title')
    {{ Auth::user()->name }}'s Dashboard | LSE
@endsection

@section('content')
    @if(Session::has('dashboard'))
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-offset-3">
                    <ul class="list-group">
                        @foreach($events as $event)
                            <li class="list-group-item">
                                <strong>{{ $event['item']['title'] }}</strong>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger">Remove Event</button>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Your Events</div>
                        <div class="panel-body">
                            <h2>No Events</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection