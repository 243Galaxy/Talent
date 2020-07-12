@extends('layouts.layout')

@section('title', 'user panel')

@section('content')
<div class="card m-4">
    <div class="card-header">
        Talents Control Panel
    </div>
    <div class="card-body">

        <ol>
            <li class="list-group">
                <a href="{{route('admin.talents.approved')}}" class="list-group-item list-group-item-action">Approved Talents</a>
                <a href="{{route('admin.talents.unapproved')}}" class="list-group-item list-group-item-action">Un-Approved Talents</a>
            </li>
        </ol>
    </div>
</div>
@endsection