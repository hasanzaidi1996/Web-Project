@extends('layouts.navFoot')
@section('head')
<title>Services</title>
<link rel="stylesheet" href="{{ URL::asset('css/Services.css') }}" />

@endsection
@section('content')
    <br><br>    
    <div class ="container">
        <div class="heading">
            <h1>What Service Would Your Like To Avail?</h1>
        </div>
        <div class="container services">
            <div class="row">
                <div class="col-md-4">
                    <div class="card zoom card1" >
                        <a href="/Buying"> <img src="{{ asset('images/buy1.png') }}" width="160px" class="">
                            <br>
                            <br>
                            <button class="btn btn-danger" >Purchase</button>
                        </a>
                        
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card zoom card1">
                        <a href="/Selling"> <img src="{{ asset('images/sell1.png') }}" width="160px" class="">
                            <br>
                            <br>
                            <button class="btn btn-danger">Sell</button>
                        </a>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card zoom card1">
                        <a href="/Repair"> <img src="{{ asset('images/repair1.png') }}" width="160px" class="">
                            <br>
                            <br>
                            <button class="btn btn-danger">Repair</button>
                        </a>    
                    </div>
                </div>
                <br>
            </div>
            <br><br>
        </div>
    </div>
@endsection