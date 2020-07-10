@extends('layouts.layout')


@section('content')

    <div class="w3-row">
        <div class="w3-col l1">&nbsp;</div>
        <div class="w3-col l10 w3-section">
            <div class="w3-card-4 card border-info">
                @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <h3 class="w3-center w3-light-blue w3-padding w3-text-indigo">Registration</h3>
        <form action="{{ url('/talents') }}" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="w3-row">
                <div class="w3-col l6 w3-margin">
                    <label for="name" class="w3-text-indigo">Full Name</label>
                    <input type="text" id="name" name="name" class="w3-input w3-round w3-border">
                </div>
                <div class="w3-col l5 w3-margin w3-right">
                    <label for="phone" class="w3-text-indigo">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="w3-input w3-round w3-border">
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col l5 w3-margin">
                    <label for="state" class="w3-text-indigo">State</label>
                    <input type="text" id="state" name="state" class="w3-input w3-round w3-border">
                </div>
                <div class="w3-col l6 w3-margin w3-right">
                    <label for="address" class="w3-text-indigo">Address</label>
                    <input type="text" id="address" name="address" class="w3-input w3-round w3-border">
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col l6 w3-margin">
                    <label for="profession" class="w3-text-indigo">Profession</label>
                    <input type="text" id="profession" name="profession" class="w3-input w3-round w3-border">
                </div>
                <div class="w3-col l5 w3-margin">
                    <label for="profile" class="w3-text-indigo">Profile Picture</label> <br>
                    <small class="w3-text-red w3-left">Note: Profile Picture should not be morethan 150kb</small>
                    <input type="file" id="profile" name="profile" class="w3-input w3-round w3-border">
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-container">
                    <h5 class="w3-text-indigo">Previous Work (If Any)</h5>
                    <small class="w3-text-red w3-left">Note: Images should not be morethan 255kb</small><br>
                    <div class="w3-col l3 w3-margin">
                        <label for="project1" class="w3-text-indigo">Project Name</label>
                        <input type="text" id="project1" name="project1" class="w3-input w3-round w3-border">
                        <label for="location1" class="w3-text-indigo">Location of Project</label>
                        <input type="text" id="location1" name="location1" class="w3-input w3-round w3-border">
                        <label for="year1" class="w3-text-indigo">Year of Project</label>
                        <input type="text" id="year1" name="year1" class="w3-input w3-round w3-border">
                        <label for="image1" class="w3-text-indigo">Select Image</label>
                        <input type="file" id="image1" name="image1" class="w3-input w3-round w3-border">
                    </div>
                    <div class="w3-col l3 w3-margin">
                        <label for="project2" class="w3-text-indigo">Project Name</label>
                        <input type="text" id="project2" name="project2" class="w3-input w3-round w3-border">
                        <label for="location2" class="w3-text-indigo">Location of Project</label>
                        <input type="text" id="location2" name="location2" class="w3-input w3-round w3-border">
                        <label for="year2" class="w3-text-indigo">Year of Project</label>
                        <input type="text" id="year2" name="year2" class="w3-input w3-round w3-border">
                        <label for="image2" class="w3-text-indigo">Select Image</label>
                        <input type="file" id="image2" name="image2" class="w3-input w3-round w3-border">
                   </div>
                    <div class="w3-col l3 w3-margin">
                        <label for="project3" class="w3-text-indigo">Project Name</label>
                        <input type="text" id="project3" name="project3" class="w3-input w3-round w3-border">
                        <label for="location3" class="w3-text-indigo">Location of Project</label>
                        <input type="text" id="location3" name="location3" class="w3-input w3-round w3-border">
                        <label for="year3" class="w3-text-indigo">Year of Project</label>
                        <input type="text" id="year3" name="year3" class="w3-input w3-round w3-border">
                        <label for="image3" class="w3-text-indigo">Select Image</label>
                        <input type="file" id="image3" name="image3" class="w3-input w3-round w3-border">
                    </div>
                </div>
                <input type="submit" class="w3-button w3-indigo w3-round w3-border w3-right w3-margin">
            </div>
            </form>
    </div>
    </div>    

        </div>
        <div class="w3-col l1">&nbsp;</div>
    </div>
@endsection