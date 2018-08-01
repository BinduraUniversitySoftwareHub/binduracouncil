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
                <dashboard></dashboard>
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
