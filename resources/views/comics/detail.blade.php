@extends('layouts.default')



@section("content")


<div class="card" style="width: 18rem;">
    <img src="{{ $card['thumb']}} " class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$card['title']}}</h5>
      <p class="card-text">{{$card['description']}}</p>
    </div>
  </div>

  
  @endsection



