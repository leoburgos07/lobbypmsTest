@extends('layouts.app')

@section('content')

<div class="container text-center">
    <h1>Listado de mis reservas</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Inmueble</th>
                <th scope="col">Día de la reserva</th>
                <th scope="col">Cantidad de días</th>
                <th scope="col">Total a pagar</th>
                <th scope="col">Cancelar reserva</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking )
            <tr>
                <td>{{$booking->bedrooms->title}}</td>
                <td>{{$booking->reservationDate}}</td>
                <td>{{$booking->reservationDays}}</td>
                <td>{{$booking->payment}} USD</td>
                <td>
                    <form action="{{ url("bookings/{$booking->id}") }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>

            @empty
            <h1 class="text-danger">No tienes reservas disponibles</h1>
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