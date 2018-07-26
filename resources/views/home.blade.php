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
                <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Compose</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal For Inbox -->
                <div class="modal fade" id="inbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Inbox</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                 <!-- Modal For Outbox -->
                <div class="modal fade" id="outbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Outbox</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                 <!-- Modal For Tracker -->
                <div class="modal fade" id="tracker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tracker</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
