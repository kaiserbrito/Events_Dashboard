@extends('layouts.master)
@include('partials.header')

@section()
    Search Results | LSE
@endsection

@section('content')
    <div class="container">
        <div class="row">

                <p>The search results <b> {{ $search }} </b> are:</p>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Search results</div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($events as $event)
                                    <a href="#"><li class="list-group-item">{{ $event->title }}</li></a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection