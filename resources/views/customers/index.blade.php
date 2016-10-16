@extends('layouts.client')
@section('content')

<div class="">
    <span class="tile-group-title">Services</span>

    <div class="tile-container">  
        <a href="/service/?cat=101" class="tile bg-teal fg-white" data-role="tile">
            <div class="tile-content iconic">
                <span class="icon mif-phone-in-talk"></span>
            </div>
            <span class="tile-label">Buy Airtime</span>
        </a>

        <a href="/service/?cat=102" class="tile bg-green fg-white" data-role="tile">
            <div class="tile-content iconic">
                <span class="icon mif-stack3"></span>
            </div>
            <span class="tile-label">Bills/Payments</span>
        </a>

        <a href="/service/?cat=103" class="tile bg-indigo fg-white" data-role="tile">
            <div class="tile-content iconic">
                <span class="icon mif-coins"></span>
            </div>
            <span class="tile-label">Funds Transfer</span>
        </a>


        <a href="/vendor/?cat=100" class="tile bg-violet fg-white" data-role="tile">
            <div class="tile-content iconic">
                <span class="icon mif-users"></span>
            </div>
            <span class="tile-label">Become A Vendor</span>
        </a>

        
    </div>

</div>



<!--        <div class="tile-group double">
            <span class="tile-group-title">Popular</span>
    
            <a href="cable.html" class="tile bg-red fg-white"  data-role="tile">
                <div class="tile-content iconic">
                    <span class="icon mif-satellite"></span>
                </div>
                <span class="tile-label">TV/Cable</span>
            </a>
          
            <a href="electricity.html" class="tile bg-pink fg-white" data-role="tile">
                <div class="tile-content iconic">
                    <span class="icon mif-weather"></span>
                </div>
                <span class="tile-label">Electricity</span>
            </a>

            <a href="utilities.html" class="tile bg-green fg-white" data-role="tile">
                <div class="tile-content iconic">
                    <span class="icon mif-water"></span>
                </div>
                <span class="tile-label">Utilities</span>
            </a>

            <a href="mtn.html" class="tile-small bg-yellow fg-amber">
                    <div class="tile-content zooming">
                        <div class="slide">
                          <img src="img/mtn.jpg">
                        </div>
                    </div>
            </a>

            <a href="airtel.html" class="tile-small bg-white">
                    <div class="tile-content zooming">
                        <div class="slide">
                          <img src="img/airtel.jpg">
                        </div>
                    </div>
            </a>
            <a href="glo.html" class="tile-small bg-emerald">
                    <div class="tile-content zooming">
                        <div class="slide">
                          <img src="img/glo.jpg">
                        </div>
                    </div>
            </a>

            <a href="etisalat.html" class="tile-small bg-darkGreen">
                    <div class="tile-content zooming">
                        <div class="slide">
                          <img src="img/etisalat.jpg">
                        </div>
                    </div>
            </a>

        </div>-->



@endsection