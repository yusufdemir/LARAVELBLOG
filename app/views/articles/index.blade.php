@extends('template/masterpage')
@section('content')


-- Bu Kısım Dinamiktir --
    @foreach($makaleler as $makale)
        <p>{{$makale->head}}</p>

    @endforeach
@stop