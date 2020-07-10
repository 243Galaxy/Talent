@extends('layouts.layout')

@section('content')
<div class="w3-row">
    <div class="w3-col l1">&nbsp;</div>
        <div class="w3-col l10">
        <div class="w3-container w3-center w3-section">
            <img src="{{asset('uploads/avatars/'.$talent->profile)}}" name="profile" id="profile" width="300px" alt=""> <br> <br>
            <h1> {{ $talent->name }}</h1>
        </div>
        <div class="w3-row w3-center">
            <div class="w3-col l6 w3-input w3-border w3-round w3-margin-right"> <h4>Address: <br> {{ $talent->address }}</h4> </div>
            <div class="w3-col l5 w3-input w3-border w3-round"> <h4>Phone Number: <br> {{ $talent->phone }}</h4> </div>
        </div>
        <div class="w3-row w3-section w3-center">
            <div class="w3-col l6 w3-input w3-border w3-round w3-margin-right"> <h4>State: <br> {{ $talent->state }}</h4> </div>
            <div class="w3-col l5 w3-input w3-border w3-round"> <h4>Profession: <br> {{ $talent->profession }}</h4> </div>
        </div> <hr class="w3-indigo">
        <h3 class="w3-text-indigo w3-center">Previous Work (If Any)</h3>
        <div class="w3-row">
            @if (empty($talent->project1))
                <h4 class="w3-red">No Project Done</h4>
            @else
                <h4 class=" w3-input w3-border w3-round ">Project Name: {{ $talent->project1 }}</h4> <br>
            @endif
            
                <h4 class="w3-input w3-border w3-round">Project Location: {{ $talent->location1}}</h4>
                <h4 class="w3-input w3-border w3-round w3-section">Year of the Project: {{ $talent->year1}}</h4>
                <h4>Project Picture: <br> <img src="{{asset('uploads/avatars/'.$talent->image1)}}" width="600px" height="300" alt=""></h4>
        </div> <br> <br>
        <div class="w3-row l4">
            <h4 class=" w3-input w3-border w3-round ">Project Name: {{ $talent->project2 }}</h4> <br>
            <h4 class="w3-input w3-border w3-round">Project Location: {{ $talent->location2}}</h4>
            <h4 class="w3-input w3-border w3-round w3-section">Year of the Project: {{ $talent->year2}}</h4>
            <h4>Project Picture: <br> <img src="{{asset('uploads/avatars/'.$talent->image2)}}" width="600px" height="300" alt=""></h4>
        </div>
        <div class="w3-row l4">
            <h4 class=" w3-input w3-border w3-round ">Project Name: {{ $talent->project3 }}</h4> <br>
            <h4 class="w3-input w3-border w3-round">Project Location: {{ $talent->location3}}</h4>
            <h4 class="w3-input w3-border w3-round w3-section">Year of the Project: {{ $talent->year3}}</h4>
            <h4>Project Picture: <br> <img src="{{asset('uploads/avatars/'.$talent->image3)}}" width="600px" height="300" alt=""></h4>
        </div> <br> <br>
    </div>
    <div class="w3-col l1">&nbsp;</div>
</div>
@endsection