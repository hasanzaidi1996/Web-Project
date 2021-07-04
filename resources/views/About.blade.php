@extends('layouts.navFoot')
@section('head')
  <title>About</title>
  <link rel="stylesheet" href="{{ URL::asset('css/About.css') }}" />
@endsection
@section('content')
    <div class="jumbotron" id="jumbo">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>About</h2>
            <h3>Find Out More <span>About Us</span></h3>
            <p>Want to Know more about A-LIYA? <span>Ok!</span> </p>
          </div>
          <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('images/au.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>A-LIYA MOTORS</h3>
            <p> <i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae beatae numquam unde hic deserunt voluptatibus quos, possimus doloremque laborum nemo! Autem, quas amet temporibus aliquid quaerat obcaecati laudantium eveniet vel, esse in aliquam earum. Nulla fugit vel maxime, amet repellendus et fugiat est cum nemo ad magni. Vel aliquam consequatur laborum voluptatum consectetur quasi vitae officia. Necessitatibus hic totam est deleniti voluptates, velit incidunt suscipit, nihil, quidem quia architecto magni.</i> </p>
            <div>
                <h5>Our Experties</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, impedit veritatis! Autem explicabo aperiam error? Necessitatibus numquam distinctio fugiat odit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia reiciendis facere, fuga amet ipsa, in labore, exercitationem sit perferendis ratione placeat? Distinctio, eius tenetur et explicabo ipsam corrupti quidem architecto.</p>
            </div>
            <div>
                <h5>INTEGRITY</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, impedit veritatis! Autem explicabo aperiam error? Necessitatibus numquam distinctio fugiat odit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia reiciendis facere, fuga amet ipsa, in labore, exercitationem sit perferendis ratione placeat? Distinctio, eius tenetur et explicabo ipsam corrupti quidem architecto.</p>
            </div>
            </li>
  
            </div>
          </div>
        </div>
       </div>
<br>
@endsection