@extends('layouts.layout')
           
@section('content')
    <div class="w3-row w3-section w3-center">
        <a href="{{ url('talents/create')}}" class="w3-btn w3-round w3-light-blue w3-margin-left">Register</a>
        <a href="{{ url('/talents')}}" class="w3-btn w3-round w3-light-blue w3-margin-left">List</a>
        <a href="" class="w3-btn w3-round w3-light-blue w3-margin-left">Contact Us</a>
        <a href="{{ url('talents/approved')}}" class="w3-btn w3-round w3-light-blue w3-margin-left">Approved</a>
    </div>
    <div class="w3-row">
       <p class="mssg w3-large w3-text-indigo w3-center"> {{ session('mssg') }} </p>
        <div class="w3-col l6 w3-padding">
            <div class="w3-container w3-light-blue">
                Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery
            </div>
        </div>
        <div class="w3-col l6 w3-padding w3-right">
            <div class="w3-container w3-light-blue">
               Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery Gallery
            </div>
        </div>
    </div>
@endsection