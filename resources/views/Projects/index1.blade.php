@extends('layouts.app')
@extends('layouts.Header')
@section('content')
<div class="container" width="200px" >
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-left:20;">Blood Donors! </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create1') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <tr class="btn-primary">
            <th >No</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date</th>
            <th >Action</th>
        </tr>
        @foreach ($blood_inventories as $blood_inventories)
            <tr style=" 10px;">
                <td>{{ ++$i }}</td>
                <td>{{ $blood_inventories->blood_group}}</td>
                <td>{{ $blood_inventories->volume }}</td>
                <td>{{$blood_inventories->status }}</td>
                <td>{{ $blood_inventories->donor_id }}</td>
                <td>{{  $blood_inventories->request}}</td>
                <td>{{ date_format($blood_inventories->created_at, 'jS M Y') }}</td>
               
                
                <td>
                    <form action="{{ route('destroy1', $blood_inventories->id) }}" method="POST">

                        <a href="{{ route('show1', $blood_inventories->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('edit1', $blood_inventories->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" class="btn-primary" style="border: none; background-color:blue;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

    {!! $blood_inventories->links() !!}

@endsection
