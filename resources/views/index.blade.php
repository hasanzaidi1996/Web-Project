@extends('layouts.navFoot')
@section('head')
    <title>Home</title>
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}" />
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
@section('content')
    <section id="hero">
        <div class="container" data-aos="zoom-out" data-aos-delay="100" >
            <h1>Welcome to </h1>
            <h1><span>A-LIYA Motors </span></h1>
            <h2>Best of Best
            </h2>
        </div>
    </section>
    <div class="section-title">
        <br>
        <h1 align="center" >What We Do!</h1>
        <br>
        <p align = "center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque corrupti delectus excepturi voluptas explicabo atque recusandae neque quia commodi nobis dignissimos quis, consequuntur, aliquam distinctio magni provident nisi perferendis ab saepe cumque deleniti! Unde, autem hic obcaecati nobis reprehenderit fugit libero suscipit, culpa quidem voluptas beatae debitis officiis reiciendis esse maiores quibusdam tempora nam quo repellendus! Harum voluptatem culpa delectus, distinctio doloribus consequuntur velit laboriosam quidem ea voluptas aliquam, atque consequatur a suscipit praesentium? Non dignissimos magnam debitis consectetur placeat ex rerum nam earum quisquam mollitia dolor facere, exercitationem excepturi vero laboriosam illum repudiandae quidem iste. Blanditiis explicabo vitae odio fuga harum libero quod, amet totam! Repudiandae voluptatum incidunt excepturi, obcaecati repellendus illum veritatis natus consectetur. Aspernatur ratione neque deleniti minima quae ad provident, quo amet optio sapiente ex, libero facere fugiat nemo eius est? Pariatur nemo iste eius eum facilis maiores minima, similique animi obcaecati. Cum unde similique commodi?</p>
        <br>
    </div>
    <br> 
    <h1 align="center">Check our Services</h1>
    <br>
            
    <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <div><i class="bx bxl-dribbble"></i></div>
                <h4 align = "center"><a href="Buying.html">Purchase Verified Cars</a></h4>
                <p align = "center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatem vitae necessitatibus accusamus temporibus exercitationem, eum deleniti expedita doloribus ipsa soluta alias eius ratione cum veniam optio magnam officiis nemo, error consequuntur aut. Atque facilis aut dolores iusto autem explicabo?</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
                <div><i class="bx bx-file"></i></div>
                <h4 align = "center"><a href="Selling.html"> Sale your Car</a></h4>
                <p align = "center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatem vitae necessitatibus accusamus temporibus exercitationem, eum deleniti expedita doloribus ipsa soluta alias eius ratione cum veniam optio magnam officiis nemo, error consequuntur aut. Atque facilis aut dolores iusto autem explicabo?</p>
            </div>
        </div> 
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
                <div><i class="bx bx-tachometer"></i></div>
                <h4 align = "center"><a href="Repair.html">Get our Repair Services</a></h4>
                <p align = "center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptatem vitae necessitatibus accusamus temporibus exercitationem, eum deleniti expedita doloribus ipsa soluta alias eius ratione cum veniam optio magnam officiis nemo, error consequuntur aut. Atque facilis aut dolores iusto autem explicabo?</p>
            </div>
        </div>
    </div>

    <h1 align="center" style="color: rgb(105, 8, 8); font-weight: bold;">Why US?</h1><br>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card zoom card1" >
                <img style="width: 100px;" src="{{ asset('images/mon.png') }}" alt="">
                <br><br>
                <h5 align="center"> We're up to 50% cheaper than garages and franchise dealers.</h5>
            </div>
            <br><br>
        </div>
        <div class="col-md-4">
            <div class="card zoom card1">
                <img style="width: 100px;" src="{{ asset('images/time.png') }}" alt="">
                <br><br>
                <h5 align="center"> Our mechanics come to you, wherever and whenever you need.</h5>
            </div>
            <br><br>
        </div>
        <div class="col-md-4">
            <div class="card zoom card1">
                <img style="width: 100px;" src="{{ asset('images/r.png') }}" alt="">
                <br><br>
                <h5 align="center"> All our mobile mechanics are vetted to the highest industry standards.</h5>    
            </div>
        </div>
        <br><br>
    </div>
</div>
    

<br>
<h1 align="center" style="color: rgb(105, 8, 8); font-weight: bold;">Our Process</h1>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card zoom card2" >
                <img style="width: 100px;" src="{{ asset('images/mon.png') }}" alt="">
                <br><br>
                <h5 align="center"> We're up to 50% cheaper than garages and franchise dealers.</h5>
                <br>
            </div>
            <br><br>
        </div>
        <div class="col-md-4">
            <div class="card zoom card2">
                <img style="width: 100px;" src="{{ asset('images/cal.jpg') }}" alt="">
                <br><br>
                <h5 align="center">Your mechanic will come to whichever address suits you best, at the date and time of your choice.</h5>
            </div>
            <br><br>
        </div>
        <div class="col-md-4">
            <div class="card zoom card2">
                <img style="width: 100px;" src="{{ asset('images/cant.png') }}" alt="">
                <br><br>
                <h5 align="center"> No need to go to the garage - just sit back, grab a drink, and enjoy your favourite show.</h5>
            
            </div>
        </div>
        <br><br>
    </div>
</div>


<br>

@endsection