@extends('layouts.client')

@section('content')
<div class="content">
    <div>
            <span class="tile-group-title">Airtime Subscription</span>

            <div class="tile-container">  
                <a href="/service/?cat=101&type=201" class="tile bg-yellow">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/mtn.jpg">
                        </div>
                    </div>
                </a>
                <a href="/service/?cat=101&type=202" class="tile bg-red">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/airtel.jpg">
                        </div>
                    </div>
                </a>
                <a href="/service/?cat=101&type=203" class="tile bg-green">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/glo.jpg">
                        </div>
                    </div>
                </a>
                <a href="/service/?cat=101&type=204" class="tile bg-darkGreen">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/etisalat.jpg">
                        </div>
                    </div>
                </a>
            </div>

        </div>
    

</div>
@endsection
