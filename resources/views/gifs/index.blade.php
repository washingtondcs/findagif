@extends('layouts.app')
@section('title','Search Gifs')
@section('content')

<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

?>

<div class="row">
	<div class="col-md-12">
		<form method="Post" action="{{url('gifs/search')}}">
			@csrf
			<div class="input-group mb-3">
				<input type="text" class="form-control" id="search" name="search" placeholder="Search gifs
...">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary">Search</button>
				</div>
			</div>
		</form>
	</div>
</div>

<?php

if (isset($_POST['search'])){
// Create the logger
$logger = new Logger(auth()->user()->name);
// Now add some handlers
$logger->pushHandler(new StreamHandler('log/FindAGif.html', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());
$keywords = filter_input(INPUT_POST, 'search' , FILTER_SANITIZE_STRING);
$logger->info('New Search: '.$keywords."<br>");
}
?>



<div class="row">
	@if($imagens!=null)

<?php
$cont=count($imagens['id']);
?>
            <form method="Post" action="{{url('gifs/store')}}">
			@csrf
			<div class="input-group mb-3">
	@for($i=0;$i<$cont;$i++)
	<div class="col-md-3">
	<img src="http://giphygifs.s3.amazonaws.com/media/{{$imagens['id'][$i]}}/giphy.gif" class="img-thumbnail" width="250px" height="250px">
	<input type="hidden" class="form-control" id="sku" name="sku" value="{{$imagens['id'][$i]}}">
		   <input type="hidden" class="form-control" id="user" name="user" value="{{auth()->user()->name}}">
		   <input type="submit" class="btn btn-primary" name="store" value="Store">
    </div>
    @endfor
    </div>
        </form>
    @endif
</div>

@endsection