
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update your Profile:</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/addProfile') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="firstName" class="col-md-4 control-label">First Name:</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName">
                            </div>
                        </div>

                    <div class="form-group">
                <label for="lastName" class="col-md-4 control-label">Last Name:</label>

                        <div class="col-md-6">
                    <input id="lastName" type="text" class="form-control" name="lastName">
                            </div>
                        </div>


                        <div class="form-group">
                    <label for="address" class="col-md-4 control-label">Address:</label>
                            <div class="col-md-6">
                    <input id="address" type="text" class="form-control" name="address">
                            </div>
                        </div>


                        <div class="form-group">
                <label for="jobTitle" class="col-md-4 control-label">Job Title:</label>
            <div class="col-md-6">
                <input id="jobTitle" type="text" class="form-control" name="jobTitle">
                        </div>
                    </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Add to Profile
                               </button>

                       
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
