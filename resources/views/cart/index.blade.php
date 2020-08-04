@extends('layouts.app')

@section('content')

  @if(count($items) == 0)
    <h1>Cart is Empty, get shopping!</h2>
  @endif

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <h1> subtotal for({{count($items)}}) items: ${{$total}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <button type="button" class="btn btn-primary my-3 w-50">Proceed to Checkout</button>
      </div>
    </div>
</div>
  
      
  @foreach($items as $item)
  <div class="container border-top py-2">
    <div class="row justify-content-center">
        <div class="col-4">
        <a href="/items/view?item={{$item->name}}">
          <img class="d-block w-100 m-auto" src="/img/{{$item->name}}.png" alt="Second slide" />
        </a> 
        </div>
      <div class="col-4 text-right align-self-center">
        <h3><a href="/items/view?item={{$item->name}}" >{{ $item->name ?? 'sorry no results found' }}</a></h3>
        <h4>${{ $item->price }}</h4>
        <form method="POST" action="{{ route('cart.destroy', [$item->id]) }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        <button class="btn btn-primary" type="submit">Delete</button>
        </form>
      </div>
  </div>
</div>
    @endforeach

  
 
 

 
  
@endsection