@extends('layouts.nav')
@section('head')
<title>Buying</title>
<link rel="stylesheet" href="{{ URL::asset('css/Buying.css') }}" />
@endsection
@section('content')
    <br>
    <h1 align="center" style="color: blue; text-align: center;"><b><i> <strong style="color: red;">Ads You Have Posted</strong> </i> </b></h1>


    <div class="jumbotron" id="jumbo">
        <div class="row">
            @foreach ($ads as $ad)
                <div class="col-md-4">
                    <div class="card zoom" >
                        <a href="VehicleDetails/{{$ad['id']}}">  <img src="/images/{{$ad['Image']}}"  style="width: 100%;"></a>
                        <a href="VehicleDetails/{{$ad['id']}}" style="color: black; padding-left: 10px"><b>{{$ad['Title']}}</b></a>
                        <p style="color: red; padding-left: 10px "><b>Rs. {{$ad['Price']}}</b></p>
                        <a class="btn btn-primary w-100" type="submit" href="UpdateSelling/{{$ad['id']}}"> Edit</a>
                        <br>
                        <a class="btn btn-primary w-100" href="deleteAd/{{$ad['id']}}"> Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection