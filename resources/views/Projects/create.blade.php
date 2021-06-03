@extends('layouts.app')
@extends('layouts.Header')

@section('content')

<div class="card" style="position:absolute;top: 55px;background-color:white;">
<div class="container"  style='width:60%;top:2%;'>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5 style="color:black;">Add New Donor</h5>
            </div>
            
        </div>
    </div>

    
    <div class="alert bg-primary">
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf
    
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Firstname:</strong>
                    <input type="text" name="fname" class="form-control" placeholder="Firstname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="lname" class="form-control" placeholder="lastname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Age</strong>
                    <input type="text" name="age" class="form-control" placeholder="age">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" class="form-control" placeholder="address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>

    </form></div></div></div>
@endsection