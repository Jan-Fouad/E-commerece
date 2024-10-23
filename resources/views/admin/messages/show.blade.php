@extends('admin.master')

@section('title', __('show_message'))

@section('content')
<body class="vertical light">
<div class="container-fluid">
        <div class="row justify-content-center">
                        <div class="col-12">
                <h2 class="h5 page-title">{{ __('show_message') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">{{ __('name') }}</label>
                                <p class="form-control">{{ $message->name }}</p>
                            </div>

                            <div class="col-md-6">
                                <label for="email">{{ __('email') }}</label>
                                <p class="form-control">{{ $message->email }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="subject">{{ __('subject') }}</label>
                                <p class="form-control">{{ $message->subject }}</p>
                            </div>

                            <div class="col-md-12">
                                <label for="message">{{ __('message') }}</label>
                                <p class="form-control">{{ $message->message }}</p>
                            </div>

                        </div>
                        <a href="{{ route('admin.messages.index') }}" class="btn btn-primary mb-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
