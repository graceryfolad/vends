@extends('layouts.client')

@section('content')
<div class="">
            <span class="tile-group-title">Bills At A Glance</span>

            <div class="tile-container">  
                <a href="electricity.html" class="tile bg-white">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/ie.png">
                        </div>
                    </div>
                </a>
                <a href="dstv.html" class="tile bg-white">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/dstv.jpg">
                        </div>
                    </div>
                </a>
                <a href="mytv.html" class="tile bg-black">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/mytv.jpg">
                        </div>
                    </div>
                </a>
                <a href="consattv.html" class="tile bg-white">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/consattv.png">
                        </div>
                    </div>
                </a>
                <a href="smile.html" class="tile bg-white">
                    <div class="tile-content iconic">
                        <div class="icon">
                          <img src="/img/smile.png">
                        </div>
                    </div>
                </a>
            </div>

        </div>
@endsection
