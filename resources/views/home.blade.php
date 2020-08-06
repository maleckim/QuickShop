@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide ctop w-75 mx-auto" data-ride="carousel">
            <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
    <div style="color: black;" class="carousel-inner">
        <div class="carousel-item active img-fluid">
        <a href="/items/view?item={{$topitems[0]->name}}">
                <img class="d-block w-100 fit" src="https://placeimg.com/1080/250/tech" alt="First slide" />
        </a>
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">{{$topitems[0]->name}}</h5>
                <!-- <p>{{$topitems[0]->description}}</p> -->
            </div>
        </div>
        <div class="carousel-item">
        <a href="/items/view?item={{$topitems[1]->name}}">
                <img class="d-block w-100 fit" src="https://placeimg.com/1080/250/arch" alt="First slide" />
        </a>
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">{{$topitems[1]->name}}</h5>
                <!-- <p>{{$topitems[1]->description}}</p> -->
            </div>
        </div>
        <div class="carousel-item">
        <a href="/items/view?item={{$topitems[2]->name}}">
                <img class="d-block w-100 fit" src="https://placeimg.com/1080/250/nature" alt="First slide" />
        </a>    
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">{{$topitems[2]->name}}</h5>
                <!-- <p>{{$topitems[2]->description}}</p> -->
            </div>
        </div>
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

@if($recent ?? '')
<div class="container mt-5">
        <div class="col">
                <h3>Recently Viewed</h3>
                <a href="/items/view?item={{$recent ?? ''}}">
                <img src="/img/{{$recent ?? ''}}.png" alt="{{$recent ?? ''}}" />
                </a>
        </div>
</div>
@endif

@endsection
