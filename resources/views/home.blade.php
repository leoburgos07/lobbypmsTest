@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-8 mt-5">
            <h1>Bienvenido <span class="text-primary">{{Auth::user()->name}}</span></h1>
        </div>
    </div>
</div>
@endsection
