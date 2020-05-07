@php
    $prodotti = config('data');
    // dd(count($prodotti));
    $prodotto = $prodotti[$id];
    // dd($prodotti);777777777
@endphp

@extends('layouts.layout')
@section('titolo')
    Prodotto
@endsection

@section('mainContent')
    <div class="row  align-items-center">
        <div class="col-4 text-center">

            <button type="button" class="btn btn-light"><a href="{{$id == 0 ? '#' : ($id - 1)}}">Prev</a></button>
        </div>
        <div class="container text-center col-4">
            <div class="card-bootstrap">
                <img class="img-fluid" src="{{$prodotto['src-h']}}" alt="">
                <img class="img-fluid" src="{{$prodotto['src-p']}}" alt="">
                <div class="card-link">
                    <h3 class="font-weight-bolder">{{$prodotto['titolo']}}</h3>
                    <p>Tipo di pasta: <span class="font-weight-bold">{{$prodotto['tipo']}}</span></p>
                    <p>Cottura: <span class="font-weight-bold">{{$prodotto['cottura']}}</span></p>
                    <p>Confezione: <span class="font-weight-bold">{{$prodotto['peso']}}</span></p>
                    <p class="text-justify font-italic">{{$prodotto['descrizione']}}</p>
                </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <button type="button" class="btn btn-light"><a href="{{$id == (count($prodotti) - 1) ? '#' : ($id + 1)}}">Next</a></button>
        </div>
    </div>
@endsection
