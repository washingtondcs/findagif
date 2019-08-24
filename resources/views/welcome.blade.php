@extends('layouts.app')
@section('title','Welcome')
@section('content')

  <div class="row">
  <div class="col-md-12">
    <div class="jumbotron text-center" style="background-color: #2a374d;color: white;">
  <h1 class="display-5">Welcome!</h1>
  <p class="lead">Start searching for your favorite GIFs right now!</p>
  <p>To access the search page you must be registered.</p>
  <a class="btn btn-primary btn-lg" href="register" role="button">Sign UP</a>
</div>
  </div>
</div>

<div class="row">
<div class="col-md-12">
  <h1><span class="badge badge-danger">Trending Gifs</span></h1>
  <hr class="my-2">

  <?php

$string = 'http://api.giphy.com/v1/gifs/trending?api_key=M4Fnp1jG0bBdzMvWvePLUIxcRLHonuvp&limit=12&rating=g';

$jsonStr = file_get_contents($string);

$resultado = json_decode($jsonStr,true);

for($i=0;$i<12;$i++){
    $imagem[] = $resultado['data'][$i]['id'];
    echo '<img src="http://giphygifs.s3.amazonaws.com/media/'.$imagem[$i].'/giphy.gif" width="200px" height="200px" style="margin:8px;" class="img-thumbnail">';
}

  ?>
  

</div>
</div>



@endsection