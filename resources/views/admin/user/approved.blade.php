@extends('layouts.layout')

@section('title', 'approved talents')

@section('content')
<div class="card m-4">
    <div class="card-header">
        Approved Talents
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Profession</th>
            </tr>
            @foreach($talents as $talent)
                <tr data-href="{{url('talents/'.$talent->id)}}">
                    <td>{{$talent->name}}</td>
                    <td>{{$talent->address}}</td>
                    <td>{{$talent->profession}}</td>
                    <td>
                        <a href="{{route('admin.talents.unapprove', $talent->id)}}" class="btn btn-md btn-warning">Un-Approve</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<script>
    $('tr').click(function(event){
        window.location = $(event.target).parent('tr').data('href')
    })
</script>
@endsection