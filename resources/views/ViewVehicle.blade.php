@extends('layouts.nav')
@section('head')
    <title>Details</title>
    <link rel="stylesheet" href="{{ URL::asset('css/ViewVehicle.css') }}" />
    
@endsection
@section('content')


    <div class="container">
        <br />
        @foreach ($vehicles as $vehicle)

            {{-- <form action="/Selling" method="post"> --}}
            {{-- @csrf --}}
            <div class="form-group">
                <h1 align = "Center">{{ $vehicle['Title'] }}</h1>
                
                <img src="/images/{{ $vehicle['Image'] }}" alt="" id="img" width="400px">
                <br>
                <h2 align = "Center">Demand RS. {{ $vehicle['Price'] }}</h2>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card zoom card1">
                            <img style="width: 100px;" src="{{ asset('images/calender.png') }}" alt="" >
                            <br>
                            <p>{{ $vehicle['Year'] }}</p>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <div class="card zoom card1">
                            <img style="width: 100px;" src="{{ asset('images/mileage.png') }}" alt="">
                            <br>
                            <p>{{ $vehicle['Millage'] }}</p>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <div class="card zoom card1">
                            <img style="width: 100px;" src="{{ asset('images/petrol.jpg') }}" alt="">
                            <br>
                            <p>{{ $vehicle['Fuel_Type'] }}</p>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-3">
                        <div class="card zoom card1">
                            <img style="width: 100px;" src="{{ asset('images/condition.jpg') }}" alt="">
                            <br>
                            <p>{{ $vehicle['conditions'] }}</p>
                        </div>
                        <br>
                    </div>

                </div>
                <table class="center">
                    <tr>
                        <td>
                            <span id="s1">Registration Year</span>
                        </td>
                        <td>
                            <span id="s2">{{ $vehicle['Reg_year'] }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="s1">Make</span>
                        </td>
                        <td>
                            <span id="s2">{{ $vehicle['Make'] }}</span>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <span id="s1">Contact name</span>
                        </td>
                        <td>
                            <span id="s2">{{ $vehicle['Contact'] }}</span>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <span id="s1">Car Location</span>
                        </td>
                        <td>
                            <span id="s2">{{ $vehicle['Location'] }}</span>
                        </td>
                    </tr>
                </table>


                {{-- <input type="text" class="form-control" placeholder="Honda Accord CF# 2004 Model Islamabad Registered"
                name="title" onkeyup="validate(this)" required="" /> --}}
            </div>
        @endforeach

        {{-- </form> --}}
    </div>
    {{-- <div class="row">
    <div class="col-12">
        @foreach ($vehicles as $vehicle)
            <h1>{{$vehicle['Title']}}</h1>
            <p>{{$vehicle['Discription']}}</p>
            <div>
            <p>{{$vehicle['Year']}}</p>
            </div>
            <p>{{$vehicle['Millage']}}</p>
            <p>{{$vehicle['Make']}}</p>
            <p>{{$vehicle['Fuel_Type']}}</p>
            <p>{{$vehicle['Reg_year']}}</p>
            <p>{{$vehicle['condition']}}</p>
            <p>{{$vehicle['Price']}}</p>
            <img src="/images/{{$vehicle['Image']}}" alt="">
            <p>{{$vehicle['Location']}}</p>
            <p>{{$vehicle['Name']}}</p>
            <p>{{$vehicle['Contact']}}</p>
        @endforeach



    </div>


</div> --}}

@endsection
