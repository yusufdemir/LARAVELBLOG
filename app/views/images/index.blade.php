@extends('template/masterpage')
@section('images')

@foreach($images as $image)

<ul id="grid-col-1">
    <li style="height:200px">
        <a href="#" class="jump_stop">
            <div style="" class="thimage">

                <img style="width: auto;" src="timthumb.php?src={{ $image->src }}&h=200&w=220" alt="{{ $image->head }}" title="{{ $image->head }}" />

                <div id="title_m"><center>{{ $image->head }}</center></div>
            </div>
        </a>
        <h4></h4><br>
    </li>
</ul>
@endforeach
<div style="clear: both;"></div>
@stop

