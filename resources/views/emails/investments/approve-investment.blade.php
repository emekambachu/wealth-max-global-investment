
<img src="{{ asset('cryptolabsfx_logo.png') }}" width="100">

<h3>Hello {{ $name }}</h3>

<p>
    @if($is_approved)
    Your Investment of ${{ $amount }} has been Approved.<br>
    @else
    Your Investment of ${{ $amount }} has been Cancelled.
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>support@wglobalinvestment.com</strong>.</p>
