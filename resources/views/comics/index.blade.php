@extends('layouts/default')

@section("page_title", "Comics page")

@section("content")
@parent

<div class="container py-3">
    <div class="row">
        @foreach($list_cards as $value)
        <div class="col py-2">
            <img src="{{ $value['thumb'] }}" alt="">
        </div>
        @endforeach
    </div>
</div>
@endsection
