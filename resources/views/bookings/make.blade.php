@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-5">Reservación de <span class="text-info">{{$bedroom->title}}</span></h1>

    <div class="form">
        <form action="{{url('storeBooking')}}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="address">Direccion</label>
                    <input type="text" class="form-control" id="address" value="{{$bedroom->address}}" disabled>
                </div>
                <input type="hidden" name="bedroom_id" value="{{$bedroom->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="payment" value="" id="sumtotality">
                <div class="form-group col-sm-3">
                    <label for="city">Ciudad</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{$bedroom->city}}" disabled>
                </div>
                <div class="form-group col-sm-3">
                    <label for="price">Precio por noche en USD</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$bedroom->price}}" disabled>
                </div>

            </div>
            <div class="row">
            <div class="form-group col-sm-4">
            <label for="nights">Fecha de inicio reserva</label><br>
                <input type="date" id="start" name="reservationDate"  max="2025-12-31" >
            </div>
                <div class="form-group col-sm-2">
                    <label for="nights">Cuantas noches?</label>
                    <input type="number" class="form-control" id="nights" name="reservationDays" onkeyup="sumTotal()" >
                </div>
            </div>
            <div class="row">
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" id="limpieza" name="limpieza" onchange="sumLimpieza()">
                    <label class="form-check-label" for="limpieza">
                        Tarifa de limpieza 30 USD
                    </label>
                </div>

            </div>
            <div class="text-center mt-3">
                <h2 class="text-primary">Total USD</h2>
                <h3 id="total"></h3>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success mt-4">Reservar</button>
            </div>

        </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>

<script>
    const total = document.getElementById("total");
    const tarifaLimpieza = document.getElementById("limpieza");
    const price = document.getElementById("price");
    const nights = document.getElementById("nights");
    const sumtotality = document.getElementById("sumtotality");

    function sumTotal() {
        let totality = nights.value * price.value;
        console.log(totality);
        total.innerHTML = totality;
        tarifaLimpieza.checked = false;
        sumtotality.value = totality;
    }

    function sumLimpieza() {
        if (tarifaLimpieza.checked == true) {
            let totality = parseInt(total.innerHTML) + 30;
            console.log(totality);
            total.innerHTML = totality;
            sumtotality.value = totality;

        } else {
            let totality = parseInt(total.innerHTML) - 30;
            total.innerHTML = totality;
            sumtotality.value = totality;
        }
    }
</script>


@endsection