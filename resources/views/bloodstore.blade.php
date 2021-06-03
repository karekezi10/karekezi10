@extends('layouts.app')
@extends('menu')
@extends('layouts.Header')
@section('content')
<div class="container " style="background-color:grey; top:11%; position:absolute; ">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
      
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="#" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                <h6>Registration of Blood</h6>
                @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
            </ul>
        </div>
        
    @endif
    <form action="insert" method="POST" >
        @csrf
    <div class="card" style="width:400px; left:30%;">
        <div class="row bg-primary" style="">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Donor Name</strong>
                    <select name="name1" class="form-control">
                    <option>--</option>
                    <option>Gustave Karekezi</option>
                    <option>Muhimpundu Dallia</option>
                    <option>Manzi Alex</option>
                    <option>Mukunzi Gustave</option>
                    <option>Janathan Shiragahinda</option>
                   
                    </select>
        </div></div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Blood Group:</strong>
                    <select name="blood_group1" class="form-control">
                    <option>O+</option>
                    <option>O-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB</option>
                    <option>AB-</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                    <strong>Volume:</strong>
                    <input type="text" name="volume1" class="form-control" placeholder="">
                </div>
            
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Save</button>
            </div>
        </div>

    </form>
    </div></div>
@endsection