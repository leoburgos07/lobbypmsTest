@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Listado de todas las reservas</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cliente</th>
                <th scope="col">Inmueble</th>
                <th scope="col">Día de la reserva</th>
                <th scope="col">Cantidad de días</th>
                <th scope="col">Total a pagar</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking )
            <tr>
                <td>{{$booking->users->name}}</td>
                <td>{{$booking->bedrooms->title}}</td>
                <td>{{$booking->reservationDate}}</td>
                <td>{{$booking->reservationDays}}</td>
                <td><strong>{{$booking->payment}} USD</strong></td>
            </tr>

            @empty
            <h1 class="text-danger">No hay reservas hechas</h1>
            @endforelse

        </tbody>
    </table>


    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif






</div>
@endsection