@extends('layouts.app')
@section('title','Recover Gifs')
@section('content')

@if($gifs!=null)
<?php
$cont=count($gifs);
?>

<h4>Number of gifs saved <span class="badge badge-secondary">{{$cont}}</span></h4>
<div class="row">
	
@for($i=0;$i<$cont;$i++)
	<div class="col-md-3">
	<img src="http://giphygifs.s3.amazonaws.com/media/{{$gifs[$i]['sku']}}/giphy.gif" class="img-thumbnail" width="250px" height="250px">
    </div>   		
    @endfor

</div>
@endif
@endsection