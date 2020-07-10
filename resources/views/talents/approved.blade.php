@extends('layouts.layout')

@section('content')

	<div class="w3-row">
    <div class="w3-col l4">
        </div>
    <div class="w3-col l8">
        <p class="mssg w3-large w3-text-indigo w3-center"> {{ session('mssg') }} </p>
        <table class="w3-table-all w3-section w3-striped w3-margin">
            <thead>
            <tr class="w3-light-blue w3-text-indigo">
            <th>Full Name</th>
            <th>State</th>
            <th>Trade</th>
            <th>View</th>
            <th>Edit</th>
            <th>Disapprove</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($talents as $talent)
                <tr>
                <td>{{ $talent['name']}}</td>
                <td>{{ $talent['state']}}</td>
                <td>{{ $talent['profession']}}</td>
                <td><div class="w3-btn w3-button w3-blue w3-small w3-round w3-hover-indigo w3-border">
                    <a href="/talents/{{ $talent->id }}" class="w3-text-black">View</a></div></td>
                   <td><a href="/talents/{{ $talent->id}}/edit" class="w3-button w3-small w3-btn w3-round w3-yellow">Edit</a></td> 
                <td>
                    <form action="/talents/ {{ $talent->id }}" class="delete_form" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w3-red w3-btn w3-button w3-round">Reject</button> <br><br>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>


@endsection