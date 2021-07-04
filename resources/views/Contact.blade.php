@extends('layouts.nav')
@section('head')
    <title>Contact</title>
    <link rel="stylesheet" href="{{ URL::asset('css/Contact.css') }}" />
    @endsection
@section('content')
    <br>
    <h1 style="color: rgb(6, 2, 17); text-align: center;"><b>CONTACT US</b></h1>
    <br> 

    <div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="jumbotron" id="jumbo">
                <form action="/Contact" method="POST">
                @csrf
                    <label>First Name*</label>
                    <input type="input" name="FirstName" placeholder="Ali" class="form-control" required="" onkeyup="validate(this)">
                    <p>Please enter Your First Name</p>
                    <label>Last Name*</label>
                    <input type="input" name="LastName" placeholder="Zaidi" class="form-control" required="" onkeyup="validate(this)">
                    <p>Please enter Your Last Name</p>
                    <label>Cell Number*</label>
                    <input type="tel" name="Cell" placeholder="0321XXXXXXX" class="form-control" id="#number" required="" onkeyup="validate(this)">
                    <p>Please enter a valid number</p>
                    <label>Email*</label>
                    <input type="email" name="Email" placeholder="XYZ@gmail.com" class="form-control" id="#email" required="" onkeyup="validate(this)">
                    <p>Please enter a valid email</p>
                    <label style="margin-top: 30px"> Message*</label>
                    <textarea class="form-control" cols="40" name="Message" placeholder="Hi, i would love to contact you guys....." rows="3" required="" id="#textarea" onkeypress="counting()" ></textarea>
                    <div class="counter">
                        <p id="#counter" class="papa">0/400</p>
                    </div>
                    <button class="btn btn-secondary" style="margin-top: 25px" id="#submit">Send Message</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div id="googleMap" style="width:100%;height:700px;"></div>
        </div>
    </div>
    <br>
</div>
<script src="{{asset('/js/Contact.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXpomORdt6ber29k8tzk_oIPxQAWaVMBE&callback=myMap"></script>

@endsection
