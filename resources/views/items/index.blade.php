@extends('layouts.app')

@section('content')

  @if(count($names) == 0)
    <h1>no results</h2>
  @endif

  
  
  
      
  @foreach($names as $name)
  <div class="container border-top py-2">
  <div class="row justify-content-center">
      <div class="col-4">
      <a href="/items/view?item={{$name->name}}">
      <img class="d-block w-100 m-auto" src="/img/{{$name->name}}.png" alt="Second slide" />
      </a> 
      </div>
      <div class="col-4 text-right align-self-center">
        
      <h3><a href="/items/view?item={{$name->name}}">{{ $name->name ?? 'sorry no results found' }}</a></h3>
      <h4>${{ $name->price }}</h4>
        
      </div>
</div>
</div>
    @endforeach

  
 
 

 
  
@endsection