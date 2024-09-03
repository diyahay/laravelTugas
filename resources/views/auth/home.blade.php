<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Home</div>
            <div class="card-body">
                <div class="alert alert-success">
                    @if ($message = Session::get('success'))
                        {{ $message }}
                    @else
                        You are logged in!
                    @endif
                </div>              
            </div>
        </div>
    </div>    
</div>
    
@endsection