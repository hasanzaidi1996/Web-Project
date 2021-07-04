@extends('layouts.nav')
@section('head')
<title>Selling</title>
<link rel="stylesheet" href="{{ URL::asset('css/Selling.css') }}" />
@endsection
@section('content')

<div class="container">
  <br />
  <h1 align="center">Update Your Add</h1>
  <form action="/UpdateSelling" method="post">
  @csrf
    <div class="form-group">
      <label for="">Add Title</label>
      <input type="text" class="form-control" placeholder="Honda Accord CF# 2004 Model Islamabad Registered" name="title" onkeyup="validate(this)" required="" />
    </div>
    <div class="form-group">
      <label for="">Discription</label>
      <textarea name = "discription" class="form-control" rows="3" id="#textarea" placeholder="One of the cleanes cars in Islamabad...... " required=""></textarea>
      <div class="counter">
        <p id="#counter" class="papa">0/400</p>
      </div>
    </div>
    <div class="form-group">
      <label for="">Year</label>
      <input name = "year" type="number" class="form-control" placeholder="2004" required="" />
    </div>
    <div class="form-group">
      <label for="">Total Millage</label>
      <input name = "millage" type="number" class="form-control" placeholder="200000" required="" />
    </div>
    <div class="form-group">
      <label for="">Make</label>
      <input name = "make" type="text" class="form-control" placeholder="Honda Accord"  required="" />
    </div>
    <!-- <div class="form-group">
      <label for="">Fuel</label>
    </div>
    <div class="form-group fuel">
    <select id="">
    <option value="">
      <div class="form-group">
        <span name = "fuel_type" class="form-group">CNG</span>
      </div>
    </option>
    <option value="">
      <div class="form-group">
        <span name = "fuel_type" class="form-group">Diesel</span>
      </div>
    </option>
    <option value="">
      <div class="form-group">
        <span name = "fuel_type" class="form-group">Hybrid</span>
      </div>
    </option>
    <option value="">
      <div class="form-group">
        <span name = "fuel_type" class="form-group">LPG</span>
      </div>
    </option>
    <option value="">
      <div class="form-group">
        <span name = "fuel_type" class="form-group">Petrol</span>
      </div>
    </option>
      </select>
    </div> -->
    <div class="form-group">
      <label for="fuel_type">Fuel Type</label>
      <input type="text" name="fuel_type" id="fuel_type">
    </div>
    <div class="form-group">
      <label for="">Registeration Year</label>
      <input name = "reg_year" type="number" class="form-control" placeholder="2006" required="" />
    </div>
    <div class="form-group">
      <label for="condition">Condition</label>
      <input type="text" name="condition" id="condition">
    </div>
    <!-- <div class="form-group condition"> -->
    <!-- <select name="condition" id="">
    <option name = "new" value="">
      <div class="form-group">
        <span class="form-group">New</span>
      </div>
    </option>
    <option name = "used" value="">
      <div class="form-group">
        <span class="form-group">Used</span>
      </div>
    </option>
      </select> -->
    <!-- </div> -->
    <h5>SET YOUR FAIR DEMAND</h5>
    <div class="form-group">
      <label for="">Price</label>
      <div class="price">
        <span class="">
          <span class="">Rs</span>
        </span>
        <input id="price" name="price" spellcheck="false" class="" autocomplete="off" type="number" value="" required="" />
      </div>
    </div>
    <h5>Please Upload A Picture of Your Car</h5>
    <br />
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-3" >
        <div class="image-upload">
          <label for="file-input">
            <img src="{{ asset('images/image.png') }}" class="pic" id="#image" />
          </label>
          <input name="image" id="file-input" type="file" accept="image/*" onchange="getImage()" />
        </div>
      </div>

    </div>
    <h5>Location Where Car Can Be Seen</h5>
    <div class="form-group">
      <label for="">Location</label>
      <input name = "location" type="text" class="form-control" placeholder="I-10, Islamabad" onkeyup="validate(this)" required="" />
    </div>
    <h5>You Will Be Shown As:</h5>
    <div class="form-group">
      <label for="">Name</label>
      <input name = "name" type="text" class="form-control" placeholder="Ali Hassan" name="name" onkeyup="validate(this)" required="" />
    </div>
    <div class="form-group displaynum">
      <span for="">Your Contct Number</span>
      <input name = "number" type="text" class="form-control" placeholder="0321XXXXXXX" onkeyup="validate(this)" required="" />
    </div>
    <div class="form-group">
      <input type="submit" value="UPDATE" id="#submit" class="btn login_btn" />
    </div>
  </form>
  <br>
</div>
<script type="text/javascript" src="{{ URL::asset('js/Selling.js') }}"></script>

@endsection