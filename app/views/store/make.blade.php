<title> Make Your Own Arrangement</title>


@extends('layouts.main')

@section('content')
<?php
$colors=array('Yellow','Red','White','Pink')

?>
<h4>Roses</h4>
     {{HTML::image('images/roses','Rose image')}}
     {{ Form::open(array('url'=>'make/submit')) }}
     @foreach($colors as $color)
     {{ Form::checkbox('roses[]',$color . 'roses' ,false) }}{{ $color }}:{{ Form::selectRange('qty', 0, 20) }}<br />

     @endforeach

     {{ Form::submit('Add to Cart') }}
     {{ Form::close() }}

{{--<h4>CALLA LILY</h4>
     {{HTML::image('images/calla','Calla Lily image')}}
     {{ Form::open(array('url'=>'make/submit')) }}

     @foreach($colors as $color )

     {{ Form::checkbox('calla[]',$color . 'calla_lily' ,false) }}{{ $color }}:{{ Form::selectRange('qty', 0, 20) }}<br />

     @endforeach
     {{ Form::submit('Add to Cart') }}
     {{ Form::close() }}
{{ count($colors) }}--}}
@stop

