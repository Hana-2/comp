@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif              

    <ul class="list-group">

        <li class="list-group-item">
        <span class="tag tag-default tag-pill float-xs-right"> First Name:</span> 
            {{ $profiles->firstName }}
        </li>

        <li class="list-group-item">
        <span class="tag tag-default tag-pill float-xs-right">Last Name:</span>
            {{ $profiles->lastName }}
        </li>

        <li class="list-group-item">
        <span class="tag tag-default tag-pill float-xs-right">Address:</span>
            {{ $profiles->address }}
        </li>

        <li class="list-group-item">
        <span class="tag tag-default tag-pill float-xs-right">Job Title:</span>
            {{ $profiles->jobTitle }}
        </li>

        </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
