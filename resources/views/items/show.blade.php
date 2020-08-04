@extends('layouts.app')

@section('content')

<div class="container">
  <div class ="row border-bottom">
    <div class="col text-center">
      <h1>{{$item->name}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-4 py-3">
      <img class="d-block w-100 m-auto" src="/img/{{$item->name}}.png" alt="{{$item->name}}" />
    </div>
    <div class="col-4 text-center align-self-center">
      <h5>price: ${{$item->price}} & FREE shipping!</h5>
    </div>
    <div class="col-4 h-100 align-self-center border-left">
      <form action="/cart" method="post">
        @csrf
      <button type="submit" value="{{$item->id}}" name="add" class="btn btn-outline-primary">Add to Cart</button>
      <button type="submit" name="abby" class="btn btn-outline-primary">Buy Now</button>
      <form>
    </div>
  </div>
  <div class="row border-top pt-3">
    <div class="col text-center">
      <p>{{$item->description}}</p>
    </div>
</div>



@endsection