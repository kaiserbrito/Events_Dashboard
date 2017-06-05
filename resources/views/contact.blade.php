@extends('layouts.master')
@include('partials.header')

@section('title')
    Contact Us | LSE
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($errors) > 0)
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Us</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{ route('contact_store') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-mail</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-md-4 control-label">Your Message</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="mesage" id="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection