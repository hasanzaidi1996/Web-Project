@extends('layouts.nav')
@section('head')
<title>Repair</title>
<link rel="stylesheet" href="{{ URL::asset('css/Repair.css') }}" />
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                <br />
                <form action="/Repair" method="POST">
                @csrf
                <h2 align = "center">We Will Contact You as Soon As Our Mechanics Are Available</h2>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input
                        type="text"
                        class="form-control" name="Name"
                        placeholder="Ali" required="" onkeyup="validate(this)"
                        />
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input
                        type="email"
                        class="form-control" name="Email"
                        placeholder="alizaidi@gmail.com" required="" onkeyup="validate(this)"
                        />
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input
                        type="text"
                        class="form-control" name="Cell"
                        placeholder="03215XXXXXXX" required="" onkeyup="validate(this)"
                        />
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input
                        type="text"
                        class="form-control" name="Address"
                        placeholder="House #1234, Street # 55, F-10, Islamabad" required="" onkeyup="validate(this)"
                        />
                    </div>
                    
                    <div class="form-group">
                        <label for="">What Problem are you facing</label>
                        <textarea
                        class="form-control"
                        rows="3"
                        placeholder="One of the cleanes cars in Islamabad...... " name="Message" id="#textarea" required="" 
                        ></textarea>
                        <div class="counter">
                            <p id="#counter" class="papa">0/400</p>
                        </div>                    </div>
                    <div class="form-group">
                        <input type="submit" id="#submit" value="Submit" class="btn login_btn" />
                    </div>
                </form>
            </div>

            <div class="col-lg-6" >
                <div class = "heading3">
                    <h3 align = "center">Meet Our Proffessionals</h3>
                </div>
                <br>
                <div class="row">
                    <div class="col-5 offset-lg-1">
                            <img src="{{ asset('images/Ali.jpg') }}" alt="">
                    </div>
                    <div class="col-6" >
                            <p align = "center">Lorem ipsum dolor sit amet consectio repellendus nobis optio autem expedita exercitationem ab, quo totam repellat beatae sint unde sapiente officiis. Sint quos, eius, ea temporibus, laborum itaque commodi autem iusto consequuntur quod voluptatem iure maxime reiciendis labore. Voluptatem a nemo nesciunt?</p>
                    </div>
                    <div class="col-5 offset-lg-1">
                            <img src="{{ asset('images/yaseen.jpg') }}" alt="">
                    </div>
                    <div class="col-6">
                            <p align = "center">Lorem ipsum dolor sit amet consectio repellendus nobis optio autem expedita exercitationem ab, quo totam repellat beatae sint unde sapiente officiis. Sint quos, eius, ea temporibus, laborum itaque commodi autem iusto consequuntur quod voluptatem iure maxime reiciendis labore. Voluptatem a nemo nesciunt?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/Repair.js') }}"></script>

@endsection