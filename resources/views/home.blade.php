@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                    <h3>Welcome to Mailbox</h3>
                    <div class="col-md-12">
                        <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#compose" style="border:0px solid transparent;">
                                    <img src="img/compose.png" width="40%" height="20%">
                                </button>
                        </div>
                         <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#inbox" style="border:0px solid transparent;">
                                    <img src="img/inbox.png" width="40%" height="20%">
                                </button>
                        </div>
                        <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#outbox" style="border:0px solid transparent;">
                                    <img src="img/outbox.png" width="40%" height="20%">
                                </button>
                        </div>
                        <div class="col-md-3">
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#tracker" style="border:0px solid transparent;">
                                         <img src="img/tracker.png" width="40%" height="20%">
                                </button>
                        </div>
                    </div>
                    </center>
                </div>
                <!-- Modal For Compose -->
                <compose></compose>
                <!-- Modal For Inbox -->
                <inbox></inbox>
                 <!-- Modal For Outbox -->
                <outbox></outbox>
                 <!-- Modal For Tracker -->
                <tracker></tracker>
            </div>
        </div>
    </div>
</div>
@endsection
