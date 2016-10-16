@extends('layouts.app')

@section('content')
<div class="content">
    

    <a href="/gairtime" class="tile bg-teal fg-white" data-role="tile">
        <div class="tile-content iconic">
            <span class="glyphicon glyphicon-phone"></span>
        </div>
        <span class="tile-label">Buy Airtime</span>
    </a>
    <a href="/gpaybills" class="tile bg-teal fg-white" data-role="tile">
        <div class="tile-content iconic">
            <span class="glyphicon glyphicon-phone"></span>
        </div>
        <span class="tile-label">Pay Bills</span>
    </a>
    <a href="/register" class="tile bg-teal fg-white" data-role="tile">
        <div class="tile-content iconic">
            <span class="glyphicon glyphicon-phone"></span>
        </div>
        <span class="tile-label">Create Account</span>
    </a>
    <a href="/" class="tile bg-teal fg-white" data-role="tile">
        <div class="tile-content iconic">
            <span class="glyphicon glyphicon-phone"></span>
        </div>
        <span class="tile-label">Buy Airtime</span>
    </a>
</div>
@endsection
