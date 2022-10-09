@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Escoger inmueble</h1>
    <div class="mt-5 row">
    @forelse ($bedrooms as $bedroom)
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/not-found.png')}}" alt="Card image cap">
        <div class="card-body text-center">
            <h5 class="card-title">{{$bedroom->title}}</h5>
            <p class="card-text">{{$bedroom->description}} <br> <br>
            <i class="fa-solid fa-city"></i> {{$bedroom->city}} <br>
            <i class="fa-regular fa-location-dot"></i> {{$bedroom->address}} <br>
            <i class="fa-solid fa-bed"></i> {{$bedroom->beds}} <br>
            <i class="fa-solid fa-restroom"></i> {{$bedroom->bathrooms}} <br>
            <i class="fa-solid fa-people-group"></i> {{$bedroom->capacity}} <br>
            <i class="fa-solid fa-dollar-sign"></i> {{$bedroom->price}} USD
            </p>
                <a href="{{route('makeBooking',['bedroom' => $bedroom])}}" class="btn btn-primary">Reservar</a>
        </div>
    </div>

    </div>
    
    @empty
        <h1 class="text-danger">No hay inmuebles disponibles</h1>
    @endforelse
</div>
</div>

@endsection