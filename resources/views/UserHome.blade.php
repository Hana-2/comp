@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">

                    <p>Current Profile</p>


<table class="table table-striped table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Job Title</th>
      <th>Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>{{ $profiles->firstName }}</td>
      <td>{{ $profiles->lastName }}</td>
      <td>{{ $profiles->jobTitle }}</td>
      <td>{{ $profiles->address }}</td>
    </tr>
  </tbody>
</table> 
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
