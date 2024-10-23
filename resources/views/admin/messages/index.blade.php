@extends('admin.master')
{{-- @include('admin.partials.scripts') --}}
@section('content')
<body class="vertical light">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>subject</th>
                        <th>message</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        
                    <tr>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->phone }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td> <a href="{{ route('admin.messages.show',['message'=>$message]) }}" class="btn btn-sn btn-success">
                            <i class="fe fe-eye fe-2x"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $messages->render('pagination::bootstrap-4') }}
        </div>
    </div>
</body>
@endsection
