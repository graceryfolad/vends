@extends('layouts.client')

@section('content')
<div class="row cells" style="width: 750px; padding: 12px;">
    <a href="#" class="tile-small bg-yellow">
        <div class="tile-content iconic">
            <div class="icon">
                <img src="img/mtn.jpg">
            </div>
        </div>
    </a>
    <div style="font-size:32px; padding-top:40px;">
        <span class="tile-label" style="font-size:32px; color: black;">MTN</span>

    </div>

    <div class="cell">

        <div class="input-control text" style="width: 350px;"> 
            <label style="color:black;">Phone Number</label>
            <hr>
            <input style="background:rgba(222,222,222,0.5); color:black;" type="tel" placeholder="eg. 0800-000-000">
        </div>
        <div class="input-control text" style="width: 350px;">
            <label style="color:black;">Recharge Amount</label>
            <hr>
            <input style="background:rgba(222,222,222,0.5); color:black;" " type="text" placeholder="100.00">
        </div>

       <button class="button success"><span class="mif-checkmark"></span> Pay</button>


    </div>
</div>
@endsection
