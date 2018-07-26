@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                    <h3>Welcome to Mailbox</h3>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <img src="img/inbox.png" width="40%" height="20%">
                        </div>
                        <div class="col-md-4">
                            <img src="img/outbox.png" width="40%" height="20%">
                        </div>
                        <div class="col-md-4">
                            <img src="img/tracker.png" width="40%" height="20%"40>
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
